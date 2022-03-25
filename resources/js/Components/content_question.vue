<template>
  <div class="question-container">
    <div class="prelude-block">
      <h1 class="heading">Ievads</h1>
      <div class="question-content-container">
        <h2 class="question-content-title">Mans Ēnu dienas mērķis</h2>
        <div class="target-question">
          <h3 class="target-question-description">Iepazīt  </h3>
          <input placeholder="profesijas/amata" type="text" class="target-question-input">
          <h3 class="target-question-description">pārstāvja darba ikdienu, </h3>
          <input placeholder="uzņēmumā/iestādē" type="text" class="target-question-input">
        </div>
        <div class="task-question">
          <h3 class="task-question-description">3 svarīgākie uzdevumi, kurus es vēlos realizēt Ēnu dienā, domājot par savu profesionālo karjeru:</h3>
          <input placeholder="1)" class="task-question-input">
          <input placeholder="2)" class="task-question-input">
          <input placeholder="3)" class="task-question-input">
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.task-question-input {
  height: 30px;
  width: 100%;
  padding: 0 0 0 15px;
  border: none;
  background-color: #D9DDE8;
  margin: 10px 0 0 0;
}
.task-question-description {
  font-size: 12pt;
  font-weight: 650;
}
.task-question {
  margin: 15px 0 0 0;
}
.target-question-description {
  display: inline-block;
  font-size: 12pt;
  margin: 7.5px 2.5px 7.5px 2.5px;
}
.target-question-choice {
  display: inline-block;
  font-size: 12pt;
  font-style: italic;
  margin: 7.5px 2.5px 7.5px 2.5px;
}
.target-question-input {
  text-align: center;
  display: inline-block;
  height: 25px;
  margin: 7.5px 2.5px 7.5px 2.5px;
  border: none;
  border-bottom: 3px solid #838FAB;
  background-color: #D9DDE8;
}
.question-content-title {
  font-weight: 500;
  font-size: 13pt;
}
.question-content-container {
  background-color: #E1E5EF;
  padding: 25px;
  height: 100%;
}
.prelude-block {
  width: 100%;
  vertical-align: top;
  min-height: 200px;
}

@media only screen and (max-width: 550px) {
  .target-question {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
}

</style>

<script>
export default {
  name: 'cQuestion',
};
</script>
