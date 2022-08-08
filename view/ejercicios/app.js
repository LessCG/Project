//@ts-check

import {questions} from './data/questions.js';
import { Question } from './models/Question.js';
import {Quiz} from "./models/Quiz.js";
import {UI} from './models/UI.js'

/**
 * 
 * @param {Quiz} quiz the main quiz object
 * @param {UI} ui UI object
 */

const renderPage = (quiz, ui) => {
        if (quiz.isEnded() == false){
            ui.createNavegationButtons(true, true)
            ui.createActionButtons(false)
            
            ui.displayContent(quiz.getQuestionIndex().type, quiz.getQuestionIndex().title, quiz.getQuestionIndex().text , quiz.getQuestionIndex().options, quiz.getQuestionIndex().media, quiz.questionIndex, (currentChoice) => {
                ui.saveStandardAnswer(currentChoice, quiz.getQuestionIndex().title, quiz.questionIndex)
                ui.showSavedAnswersAlert(true)
            });

            console.log();
            
            //Go to next question
            const btnNext = document.getElementById("buttonForward")
            if(btnNext){
                btnNext.onclick = () =>{
                    ui.saveInputAnswer(quiz.getQuestionIndex().type, quiz.getQuestionIndex().title, quiz.questionIndex, quiz.getQuestionIndex().options)
                    quiz.questionIndex++
                    renderPage(quiz, ui)
                }
            }
            
            //Go to previous question
            const btnBack = document.getElementById("buttonBack")
            if(btnBack){
                btnBack.onclick = () =>{  
                    if(quiz.questionIndex != 0){
                        ui.saveInputAnswer(quiz.getQuestionIndex().type, quiz.getQuestionIndex().title, quiz.questionIndex, quiz.getQuestionIndex().options)
                        quiz.questionIndex--
                        renderPage(quiz, ui)   
                    }
                }
            }

            const btnSend = document.getElementById("buttonSend")
            if(btnSend){
                btnSend.onclick = () =>{
                    ui.saveInputAnswer(quiz.getQuestionIndex().type, quiz.getQuestionIndex().title, quiz.questionIndex, quiz.getQuestionIndex().options)
                    var nonAnsweredQuestions = 0  
                    for(let i=0; i<quiz.numQuestions; i++){
                        var value = localStorage.getItem(quiz.getQuestionIndex().title +" Question No. "+ i)
                        if(value == "" || value == undefined || value == null){
                            nonAnsweredQuestions++
                        }
                    }
                    if(nonAnsweredQuestions >0){
                        const confirmation = confirm("You're about to send this evaluation without completing it. Do you want to proceed to send it anyways?")
                            if(confirmation){
                                quiz.guess();
                                quiz.gradeEv();
                                ui.showScores(quiz.scoreCorrect, quiz.numQuestions, quiz.percentage, quiz.score, quiz.maxScore, quiz.questions)
                            }
                    }
                    else{
                        const confirmation = confirm("You're about to send the evaluation. Do you want to proceed?")
                        if(confirmation){
                            quiz.guess();
                            quiz.gradeEv();
                            ui.showScores(quiz.scoreCorrect, quiz.numQuestions, quiz.percentage, quiz.score, quiz.maxScore, quiz.questions)
                        }

                    }
                }
            }
            
            
           
            //Disable button Back if it's the first question
            if(quiz.questionIndex == 0){ ui.disableButtonBack() }
            else{ ui.enableButtonBack() }

            // Disable the button Next and enable the button Send only if it's the last question and 
            if(quiz.questionIndex == quiz.questions.length-1){
                ui.disableButtonNext()
                ui.enableButtonSend()
            }
            else{
                ui.enableButtonNext()
                ui.disableButtonSend()
            }
            //Show progress
            ui.showProgress(quiz.questionIndex, quiz.numQuestions)
        }
};

function main() {
    const quiz = new Quiz(questions)
    const ui = new UI()
    
    renderPage(quiz, ui)
}

main();
