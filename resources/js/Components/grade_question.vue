<template>
  <div class="question-container">
    <div class="question-block">
      <h1 class="heading">1. Jautājums</h1>
      <div class="g-question-content-container">
        <div class="g-question-partition">
          <h2 class="g-question">Esmu apmierināts/a un gandarīts/a ar savu izvēli un ieguvumiem no Ēnu dienas.</h2>
        </div>
        <div class="g-grade-container">
          <div class="g-grade-partition">
            <div class="g-grade-box-container">
              <h3 class="g-grade-box-title">1</h3>
              <label class="g-grade-box-switch">
                <input name="grade-1" type="radio" class="g-grade-box-check">
                <span class="g-grade-box-toggle"></span>
              </label>
            </div>
            <div class="g-grade-box-container">
              <h3 class="g-grade-box-title">2</h3>
              <label class="g-grade-box-switch">
                <input name="grade-1" type="radio" class="g-grade-box-check">
                <span class="g-grade-box-toggle"></span>
              </label>
            </div>
            <div class="g-grade-box-container">
              <h3 class="g-grade-box-title">3</h3>
              <label class="g-grade-box-switch">
                <input name="grade-1" type="radio" class="g-grade-box-check">
                <span class="g-grade-box-toggle"></span>
              </label>
            </div>
            <div class="g-grade-box-container">
              <h3 class="g-grade-box-title">4</h3>
              <label class="g-grade-box-switch">
                <input name="grade-1" type="radio" class="g-grade-box-check">
                <span class="g-grade-box-toggle"></span>
              </label>
            </div>
            <div class="g-grade-box-container">
              <h3 class="g-grade-box-title">5</h3>
              <label class="g-grade-box-switch">
                <input name="grade-1" type="radio" class="g-grade-box-check">
                <span class="g-grade-box-toggle"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="g-comment-block">
      <h1 class="heading">Komentārs</h1>
      <div class="g-comment-container">
        <textarea class="g-textbox" placeholder="Vērtējuma paskaidrojums..."></textarea>
      </div>
    </div>
  </div>
</template>

<style>
.g-grade-box-container {
  width: 12.5%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  z-index: 1;
}
.g-grade-box-title {
  font-weight: bold;
  font-size: 10pt;
}
.g-grade-box-check {
  vertical-align: top;
  cursor: pointer;
  opacity: 0;
}
.g-grade-box-switch {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 2px solid #477998;
  border-radius: 6px;
  background-color: #E1E5EF;
}
.g-grade-box-toggle {
  width: 0%;
  height: 0%;
  left: 50%;
  top: 50%;
  position: absolute;
  cursor: pointer;
  transition: .2s;
}
.g-grade-box-check:checked + .g-grade-box-toggle {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #477998;
  transition: .2s;
}
.question-container {
  width: 100%;
  display: flex;
  justify-content: space-between;
  margin: 25px 0 50px 0;
}
.question-block {
  width: 55%;
  vertical-align: top;
  min-height: 110px;
}
.g-comment-block {
  width: 40%;
  vertical-align: top;
  min-height: 110px;
}
.g-question-content-container {
  background-color: #E1E5EF;
  height: 100%;
  display: flex;
  justify-content: space-between;
  position: relative;
}
.g-comment-container {
  background-color: #E1E5EF;
  height: 100%;
  min-height: 110px;
}
.heading {
  font-size: 12pt;
  font-weight: bold;
}
.g-question-partition {
  width: 55%;
  display: flex;
  align-items: center;
}
.g-question {
  font-size: 11pt;
  margin: 10px;
}
.g-grade-partition {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.g-grade-container {
  position: relative;
  width: 40%;
  padding: 0 10px 0 0;
}
.g-grade-container::after {
  content: "";
  width: 87.5%;
  top: calc(50% + 8px);
  left: 5%;
  position: absolute;
  height: 3px;
  background-color: #477998;
  z-index: 0;
}
.g-textbox {
  background-color: #E3E7F1;
  width: 100%;
  height: 100%;
  min-height: 110px;
  border-bottom: 3px solid #838FAB;
  resize: none;
  border-left: none;
  border-top: none;
  border-right: none;
}
.g-textbox:focus .g-textbox:focus-visible {
  border-bottom: 3px solid #838FAB;
  outline: none;
  box-shadow: none;
}
@media only screen and (max-width: 1000px) {
  .g-question-content-container {display: block;}
  .g-question-partition {width: 90%;}
  .g-grade-container {width: 100%;}
  .question-block {width: 50%;}
  .g-comment-block {width: 45%;}
}

@media only screen and (max-width: 750px) {
  .question-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .g-grade-container {padding: 0;}
  .g-question-content-container {padding: 0 0 10px 0;}
  .question-block {width: 100%}
  .g-comment-block {width: 100%;}
}

</style>

<script>
export default {
  name: 'gQuestion',
};
</script>
