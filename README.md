# Laravel Livewire "isolate" Testing 
This project is to demonstrate a few use cases, particularly ones that are not working as expected.

> **_TIP:_**  If using valet and experiencing awkward behavior where it almost seems as though php is running a cached version of the livewire codebase, run `valet restart`... that cleared up a very confusing issue for me that I burned way too much time on.

## Setup
- Clone eilerth/livewire (`git clone https://github.com/eilerth/livewire.git`) to the same directory as this project (if you haven't already)
- run `composer install`

## How the "isolate" parameter is intended to work
Livewire v3 now bundles requests, forcing a synchronous behavior where a livewire component will block other components until it finishes it's request.

This `isolate` parameter attempts to make things asynchronous again, where a component with `isolate` applied will neither impact nor be impacted by other components.

## Applying the "isolate" parameter
Add `isolate` as a parameter when referencing a livewire component in the blade file.

Not isolated:

    <livewire:wire-click />

Isolated:

    <livewire:wire-click isolate />

## Examples

### Example A (works as expected)
http://livewire-isolate-testing.test/example-a

This example demonstrates behavior *without* the `isolate` parameter.
- Before the "slow" toggle component is loaded, the "fast" one is unresponsive.
- After checking the "slow" toggle checkbox, the "fast" one becomes unresponsive again while it waits for the "slow" one to complete. 

### Example B (works as expected)
http://livewire-isolate-testing.test/example-b

This example demonstrates behavior *with* the `isolate` parameter. Notice that the "fast" toggle is responsive regardless of whether or not the "slow" toggle is processing a request.

### Example C (wire:init problem)
http://livewire-isolate-testing.test/example-c

In this example, the same component is referenced with and without the `isolate` parameter. The component it is calling uses `wire:init`. When the `isolate` parameter is present, the `wire:init` event does not seem to get reached on the server side. 

### Example D (wire:click problem)
http://livewire-isolate-testing.test/example-d

In this example, the same component is referenced with and without the `isolate` parameter. Clicking on "A!", "B!", or "C!" should update the "click something..." text, triggered by `wire:click`. When the `isolate` parameter is present, the `wire:init` event does not seem to get reached on the server side. 


