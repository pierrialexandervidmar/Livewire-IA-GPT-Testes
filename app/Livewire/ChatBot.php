<?php

namespace App\Livewire;

use App\Models\ChatInteraction;
use Livewire\Component;
use Prism\Prism\ValueObjects\Messages\AssistantMessage;
use Prism\Prism\ValueObjects\Messages\UserMessage;
use Prism\Prism\Facades\Prism;
use Prism\Prism\Enums\Provider;
use Illuminate\Support\Facades\Auth;

class ChatBot extends Component
{

    /** @var Collection<int, ChatInteraction> */
    public $messages = [];

    public $question;

    public $answer;

    public function mount()
    {
        $this->messages = ChatInteraction::orderBy('created_at')->get();
    }

    public function askQuestion()
    {
        $conversation = [];

        foreach ($this->messages as $message) {
            $conversation[] = new UserMessage($message->question);
            $conversation[] = new AssistantMessage($message->answer);
        }

        $conversation[] = new UserMessage($this->question);

        $response = Prism::text()
            ->using(Provider::OpenAI, 'gpt-4o')
            ->withSystemPrompt('You are a helpful assistant.')
            ->withMessages($conversation)
            ->asText();

        $this->answer = $response->text;

        $interaction = ChatInteraction::create([
            'question' => $this->question,
            'answer' => $this->answer,
            'user_id' => Auth::id(),
        ]);

        $this->messages->push($interaction);
        $this->question = '';
    }

    public function render()
    {
        return view('livewire.chat-bot');
    }
}
