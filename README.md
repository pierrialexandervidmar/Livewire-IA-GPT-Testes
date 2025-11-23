# 🧪 Livewire + IA Playground

Pequeno projeto de estudo usando **Laravel 12**, **Livewire 3**, **Tailwind CSS** e integração com **OpenAI** via [prism-php/prism](https://github.com/prism-php/prism).

A ideia é ter um ambiente simples para experimentar:

- Componentes Livewire reativos
- Estilização com Tailwind
- Integração com modelos de IA (como `gpt-4o-mini`)
- Salvando interações no banco (histórico de chat e registros de “Bird Tracker”)

---

## ✨ Funcionalidades

### 🤖 ChatBot com IA (Livewire + OpenAI)
- Componente Livewire que:
  - Recebe uma pergunta do usuário
  - Envia o contexto (histórico de mensagens) para a API da OpenAI via **Prism**
  - Armazena **pergunta**, **resposta** e **usuário** na tabela `chat_interactions`
- Interface de chat com:
  - Histórico de conversas
  - Separação visual entre mensagens do usuário e do bot
  - Loading no botão enquanto aguarda a resposta

---

## 🧱 Stack

- **PHP** 8.4
- **Laravel** 12.x
- **Livewire** 3.x
- **Tailwind CSS** (via Vite)
- **SQLite** (para testes locais)
- **Prism PHP** para integração com OpenAI

