const prevBtns = document.querySelectorAll(".btn-back");
const nextBtns = document.querySelectorAll(".btn-next");
const formSteps = document.querySelectorAll(".register__formstep");
const progress = document.getElementById("progress");
const progressSteps = document.querySelectorAll(".progress__step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("register__formstep-active") &&
      formStep.classList.remove("register__formstep-active");
  });

  formSteps[formStepsNum].classList.add("register__formstep-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress__step-active");
    } else {
      progressStep.classList.remove("progress__step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress__step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}