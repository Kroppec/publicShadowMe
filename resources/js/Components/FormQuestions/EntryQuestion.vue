<template>
  <div id="question-container" class="w-full flex relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
    <div id="question-shell" class="w-full p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">Ievads</h3>
      <div id="question-block" class="w-full p-2 md:-3 lg:p-4 bg-shell-block rounded-md">
        <h4 id="block-heading" class="text-md font-bold my-1">Mans Ēnu dienas mērķis</h4>
        <div id="block-shell" class="w-full flex flex-col items-center md:flex-row lg:flex-row p-2 md:p-3 lg:p-4">
          <h5 id="block-description" class="mx-2 my-1 text-sm md:text-md">Iepazīt</h5>
          <input id="block-profession-input" class="mx-2 my-1 text-input h-7 max-h-7 text-center" placeholder="profesijas/amata">
          <h5 id="block-description" class="mx-2 my-1 text-sm md:text-md">pārstāvja darba ikdienu,</h5>
          <input id="block-business-input" class="mx-2 my-1 text-input h-7 max-h-7 text-center" placeholder="uzņēmumā/iestādē">
        </div>
        <h4 id="block-heading" class="text-md font-bold my-1">3 mani svarīgākie uzdevumi</h4>
        <div id="block-shell" class="w-full flex flex-col p-2 md:p-3 lg:p-4">
          <div id="input-shell" class="flex flex-row">
            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">1)</h5>
            <input id="block-task-input" class="my-1 w-full text-input h-7 max-h-7 px-4">
          </div>
          <div id="input-shell" class="flex flex-row">
            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">2)</h5>
            <input id="block-task-input" class="my-1 w-full text-input h-7 max-h-7 px-4">
          </div>
          <div id="input-shell" class="flex flex-row">
            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">3)</h5>
            <input id="block-task-input" class="my-1 w-full text-input h-7 max-h-7 px-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'EntryQuestion',
};
</script>
