document.addEventListener("DOMContentLoaded", function() {
    const quizForm = document.getElementById("quiz-form");
    const submitQuizButton = document.getElementById("submit-quiz");
    const resultDiv = document.getElementById("result");

    submitQuizButton.addEventListener("click", function() {
        const questions = document.querySelectorAll(".question");
        let score = 0;
        questions.forEach((question, index) => {
            const correctAnswer = question.getAttribute("data-correct");
            const selectedOption = quizForm.querySelector(`input[name="question${index + 1}"]:checked`);
            if (selectedOption && selectedOption.value === correctAnswer) {
                score++;
            }
        });
        resultDiv.textContent = `Your score is ${score} out of ${questions.length}`;
    });
});
