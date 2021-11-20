const number = document.getElementById("numberInput")
const submitButton = document.getElementById("submitButton")
const startNewGameButton = document.getElementById("startNewGameButton")
const guessesText = document.getElementById("guesses")
const lastResultText = document.getElementById("lastResult")
const lowOrHiText = document.getElementById("lowOrHi")

var intents = 1
var hiddenNumber = newHiddenNumber()

submitButton.addEventListener("click", submitGuess)
startNewGameButton.addEventListener("click", startNewGame)

function submitGuess() {
    let guessNumber = Number(number.value)

    if (intents === 1) {
        guessesText.textContent = "Conjeturas anteriores:"
    }

    guessesText.textContent += " " + guessNumber

    if (guessNumber === hiddenNumber) {
        lastResultText.textContent = "Exito!"
        lastResultText.style.backgroundColor = "#20c997"
        lowOrHiText.textContent = ""
        setGameOver()
    } else if (intents === 10) {
        lastResultText.textContent = "Game Over!"
        lastResultText.style.backgroundColor = "red"
        lowOrHiText.textContent = ""
        setGameOver()
    } else {
        if (guessNumber > hiddenNumber) {
            lastResultText.textContent = "Incorrecto!"
            lastResultText.style.backgroundColor = "red"
            lowOrHiText.textContent = "La última suposición fue demasiado alta!"
        } else if (guessNumber < hiddenNumber) {
            lastResultText.textContent = "Incorrecto!"
            lastResultText.style.backgroundColor = "red"
            lowOrHiText.textContent = "La última suposición fue demasiado baja!"
        }
    }

    intents++
    number.value = ""
}

function startNewGame() {
    intents = 1
    guessesText.textContent = ""
    lastResultText.textContent = ""
    lowOrHiText.textContent = ""

    lastResultText.style.backgroundColor = "white"
    startNewGameButton.style.display = "none"

    number.disabled = false
    submitButton.disabled = false

    hiddenNumber = newHiddenNumber()
}

function newHiddenNumber() {
    return Math.floor(Math.random() * 100 + 1)
}

function setGameOver() {
    number.disabled = true
    submitButton.disabled = true
    startNewGameButton.style.display = "block"
}
