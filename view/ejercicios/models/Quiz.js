// @ts-nocheck
import {Question} from './Question.js'
export class Quiz{
    questionIndex = 0
    score = 0 // puntaje
    maxScore = 0 // numero maximo de puntos
    scoreCorrect = 0 //preguntas respondidas correctamente
    numQuestions = 0 //numero total de preguntas
    percentage = 0 // porcentaje de preguntas respondidas correctamente
    repetitions = 0 // repeticiones
    allAnswers = []
    allCorrectAnswers = []
    

    /**
     * 
     * @param {Question[]} questions 
     */
    constructor(questions){
        this.questions = questions;
    }

    /**
     * 
     * @returns {Question} the question found
     */
    getQuestionIndex(){
        return this.questions[this.questionIndex];
    }

    isEnded(){
        
        this.numQuestions = this.questions.length
        
        
        //this.repetitions
        return this.questions.length === this.questionIndex
    }

    gradeEv(){
        this.score = Math.round((100 / this.numQuestions) * this.scoreCorrect)
        this.maxScore = 100
        this.percentage = Math.round(this.scoreCorrect * 100 / this.numQuestions)
    }

    /**
     * 
     * @param {string} answer 
     */
    guess(){
        for(let i=0; i<this.questions.length; i++){
            var saved = localStorage.getItem(this.questions[i].title +" Question No. "+ i)

            if(this.questions[i].type == "standard"){
                if(saved == this.questions[i].answer){
                this.scoreCorrect++;
                }
            }
            if(this.questions[i].type == "write"){
                for(let j=0; j<this.questions[i].answer.length; j++){
                    if(saved == this.questions[i].answer[j]){
                        this.scoreCorrect++;
                    }
                }
            }
            if(this.questions[i].type == "dropdownListSelection" || this.questions[i].type == "multipleSelection"){
                var a = JSON.stringify(JSON.parse(saved))
                var b = JSON.stringify(this.questions[i].answer)
                if(a == b){
                    this.scoreCorrect++;
                }
            }
            
        }   
    }

}