<?php

namespace App\Livewire;

use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class TodoList extends Component
{
    public $openTasks, $doneTasks;
    public User $user;
    #[Rule(['required', 'string', 'max:255'])]
    public string $task;

    public function mount(): void
    {
        $this->user = auth()->user();
        $this->getOpenTasks();
        $this->getDoneTasks();
    }

    public function getOpenTasks(): void
    {
        $this->openTasks = Todo::query()->whereUserId($this->user->id)->whereStatus('open')->get();
    }

    public function getDoneTasks(): void
    {
        $this->doneTasks = Todo::query()->whereUserId($this->user->id)->whereStatus('done')->get();
    }

    public function addTodo(): bool
    {
        $this->validate();
//        create task
        Todo::query()->create(['user_id' => $this->user->id, 'task' => $this->task]);
//        refresh open task
        $this->getOpenTasks();
        $this->reset('task');

        return true;
    }

    public function markAsDone(Todo $todo): bool
    {
        $todo->status = 'done';
        $todo->save();
//        refresh open & done task
        $this->getOpenTasks();
        $this->getDoneTasks();

        return true;
    }

    public function delete(Todo $todo): bool
    {
        $todo->delete();
//        refresh done task
        $this->getDoneTasks();

        return true;
    }

    public function render()
    {
        return view('livewire.todo-list')
            ->layout('components.layouts.base', ['pageTitle' => 'Todo']);
    }
}
