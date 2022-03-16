<template>
  <div class="content">
    <h1 class="content-title">Ēnu dienas atskaite</h1>
    <h2 class="content-description">Jānis Bērziņš - Rīgas Valsts 3. ģimnāzija - 12. (B) klase</h2>
    <div class="form-container">
      <div class='form-block'>
        <slot />
      </div>
    </div>
  </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

.content {
  width: 85vw;
  max-width: 1200px;
  margin: auto;
  height: 100vh;
  background-color: #EEF1F9;
  position: relative;
  padding: 2.5vw
}
.content-title {
  font-size: 45pt;
  font-weight: bolder;
}
.content-description {
  font-size: 14pt;
  font-weight: 700;
  color: #838FAB;
}
.form-container {
  position: relative;
  width: 100%;
  max-width: 1200px;
  margin: auto;
  height: 90%;
  background-color: #E8ECF6;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Ubuntu', sans-serif;
}
.form-block {
  background-color: inherit;
  width: 100%;
  max-width: 1175px;
  height: 100%;
  overflow-y: scroll;
  overflow-x: hidden;
  padding: 10px;
}
::-webkit-scrollbar {
  background-color: #D7DCE8;
  width: 9px;
}
::-webkit-scrollbar-thumb {
  background-color: #838FAB;
  border-radius: 6px;
}

@media only screen and (max-width: 1000px) {
  .content {width: 100vw}
  .form-container {width: 90vw}
  .form-block {width: 87.5vw}
}
</style>

<script>
export default {
  name: 'fBlock',
};
</script>
