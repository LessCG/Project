import { Quiz } from "./Quiz.js";
import { Question} from './Question.js';
import { questions } from "../data/questions.js";
export class UI{
    constructor(){
    }
    /**
     * @param {String} title title to render
     */
    showTitle(title){
        const quizTitle = document.getElementById("title")
        quizTitle.innerText = title
    }

    showImage(media, container){
        var image = document.createElement("img")
        image.src = media
        image.id = "image"
        container.append(image)
    }

    showInstructions(question, container){
        var questionInstructions = document.createElement("p")
        questionInstructions.id = "instruction"
        questionInstructions.innerText = question[0].instructions
        container.appendChild(questionInstructions) 
    }

    showQuestions(question, container){
        for(let i=0; i<question[0].questions.length; i++){
            var questionText = document.createElement("p")
            questionText.id = "questionText"
            questionText.innerText = question[0].questions[i]
            container.appendChild(questionText)
        }
    }

    /**
     * 
     * @param {string[]} options options of the question
     */
    displayContent(type, title, question, options, media, index, callback){
        const containersContainer = document.getElementById("container")
        containersContainer.innerHTML = "";

        this.showTitle(title)
        
        var newLine = document.createElement("hr")
        newLine.id = "newline"

        //Standard Template
        if(type == "standard"){
            var standardContainer = document.createElement("div")
            standardContainer.id = "standardContainer"

            var questionsContainer = document.createElement("div")
            questionsContainer.id = "singleQuestionContainer"
            questionsContainer.className = "singleQuestionContainer"
            standardContainer.append(questionsContainer)
            this.showInstructions(question, questionsContainer)

            this.addQuestions(question, options, questionsContainer, callback)
            this.showImage(media, standardContainer)

            containersContainer.append(standardContainer)
        }
        //Write Template
        if(type == "write"){
            var writingContainer = document.createElement("div")
            writingContainer.id = "writingContainer"
            this.showInstructions(question, writingContainer)
            this.showQuestions(question, writingContainer)

            var questionAndMediaContainer = document.createElement("div")
            questionAndMediaContainer.id = "questionAndMediaContainer"
            writingContainer.append(questionAndMediaContainer)
            

            var questionContainer = document.createElement("div")
            questionAndMediaContainer.append(questionContainer)
            
            var textfield = document.createElement("input")
            textfield.placeholder = "Your answer"
            textfield.id = "textfield"
            writingContainer.append(textfield)
            if(media != ""){
                this.showImage(media, questionAndMediaContainer)
            }
            

            containersContainer.append(writingContainer)
        }

        //Dropdown List Selection Template
        if(type == "dropdownListSelection"){
            var dropdownListContainer = document.createElement("div")
            dropdownListContainer.id = "dropdownListContainer"
            this.showInstructions(question, dropdownListContainer)

            for(let i=0; i<question[0].questions.length; i++){
                var singleQuestionContainer = document.createElement("div")
                singleQuestionContainer.id = "singleQuestionContainer"+i
                singleQuestionContainer.className = "singleQuestionContainer"

                var questionText = document.createElement("p")
                questionText.innerText = question[0].questions[i]

                var select = document.createElement("select")
                select.className = "browser-default"
                select.id = "select"+i
                for(let j=0; j<options.length; j++){
                    var option = document.createElement("option")
                    option.text = options[j]
                    option.value = options[j]
                    select.append(option)
                }
                singleQuestionContainer.append(questionText)
                singleQuestionContainer.append(select)
                dropdownListContainer.append(singleQuestionContainer)
            }

            dropdownListContainer.append(singleQuestionContainer)
            containersContainer.append(dropdownListContainer)
        }

        //Multiple Selection Template
        if(type == "multipleSelection"){
            var multipleSelectionContainer = document.createElement("div")
            multipleSelectionContainer.id = "multipleSelectionContainer"
            this.showInstructions(question, multipleSelectionContainer)

            var singleMultipleSelectionQuestionContainer = document.createElement("div")
            singleMultipleSelectionQuestionContainer.id = "singleQuestionContainer"
            singleMultipleSelectionQuestionContainer.className = "singleQuestionContainer"

            for(let i=0; i<options.length; i++){
                var label = document.createElement("p")
                var text = document.createTextNode(options[i])
                var checkbox = document.createElement("input")

                checkbox.type = "checkbox"
                checkbox.value = options[i]
                checkbox.className  ="checkbox"
                checkbox.id = "checkbox"+i

                label.append(checkbox)
                label.append(text)
                singleMultipleSelectionQuestionContainer.append(label) 
            }
            multipleSelectionContainer.append(singleMultipleSelectionQuestionContainer)
            containersContainer.append(multipleSelectionContainer)
        }

        //Information Template
        if(type == "information"){
            var informationContainer = document.createElement("div")
            informationContainer.id = "informationContainer"
            containersContainer.append(informationContainer)

            var textContainer = document.createElement("div")
            textContainer.id = "textContainer"
            informationContainer.append(textContainer)

            var mediaContainer = document.createElement("div")
            mediaContainer.id = "mediaContainer"
            informationContainer.append(mediaContainer)

            var informationTextTitle = document.createElement("p")
            informationTextTitle.id = "informationTextTitle"
            informationTextTitle.innerText = question[0].textTitle
            textContainer.append(informationTextTitle)

            var informationTextParagraph = document.createElement("p")
            informationTextParagraph.id = "informationTextParagraph"
            informationTextParagraph.innerText = question[0].paragraph
            textContainer.append(informationTextParagraph)

            this.showImage(media, mediaContainer)

        }

        //Reading Template
        if(type == "reading"){
            var readingContainer = document.createElement("div")
            readingContainer.id = "readingContainer"
            containersContainer.append(readingContainer)

            var lectureContainer = document.createElement("div")
            var questionsContainer = document.createElement("div")
            lectureContainer.id = "lectureContainer"
            questionsContainer.id = "readingQuestionsContainer"

            readingContainer.append(lectureContainer)
            readingContainer.append(questionsContainer)

            //Add lecture texts
            var lectureTitle = document.createElement("p")
            lectureTitle.id = "lectureTitle"
            lectureTitle.innerText = media[0].title

            var lectureParagraph = document.createElement("p")
            lectureParagraph.id = "lectureParagraph"
            lectureParagraph.innerText = media[0].paragraph

            lectureContainer.append(lectureTitle)
            lectureContainer.append(lectureParagraph)
            //Add lecture questions
            for(let i=0; i<question.length; i++){
                var divQuestion = document.createElement("div")
                divQuestion.className = "singleQuestionContainer"
                divQuestion.id = "singleQuestionContainer"+i
                this.addQuestions(question[i], options[i], divQuestion, callback, index)

                questionsContainer.append(newLine)
                questionsContainer.append(divQuestion)
                
            }
        }
        //Listening Template
        if(type == "listening"){
            var listeningContainer = document.createElement("div")
            listeningContainer.id = "listeningContainer"
            containersContainer.append(listeningContainer)

            var timer = document.createElement("h3")
            timer.innerText = "-- : --"
            timer.id  = "timer"

            var audio = document.createElement("audio")
            audio.id = "audio"
            audio.src = media

            listeningContainer.append(audio)
            listeningContainer.append(timer)
            listeningContainer.append(newLine)

            var questionsContainer = document.createElement("div")
            questionsContainer.id = "listeningQuestionsContainer"
            listeningContainer.append(questionsContainer)

            //Add lecture questions
            for(let i=0; i<question.length; i++){
                var divQuestion = document.createElement("div")
                divQuestion.className = "singleQuestionContainer"
                divQuestion.id = "singleQuestionContainer"+i
                this.addQuestions(question[i], options[i], divQuestion, callback)
                questionsContainer.append(divQuestion)
            }
        }
        this.showSavedAnswers(index, title, type)
    }

    addQuestions(question, options, container, callback){  
        this.showQuestions(question, container)

        for(let i=0; i < options.length; i++){
            const button = document.createElement("input")
            button.type="radio"
            button.name = container.id
            button.id = options[i]
            button.value = options[i]
            button.className = "radioInput"

            var label = document.createElement("label")
            label.htmlFor = options[i]
            label.className = "radio"
            label.id = "questionLabel"

            var div = document.createElement("span")
            div.className="radio_radio"

            var description = document.createTextNode(options[i])
            
            label.appendChild(div)
            label.appendChild(button)
            label.appendChild(description)
            
            button.addEventListener("click", () => callback(options[i]));
            container.appendChild(label)
        }
    }

    countdown(startingMinutes){
        var distance = startingMinutes * 1000 * 60
        // Update the count down every 1 second
        var x = setInterval(function() {
            distance = distance-1000

            // Time calculations for minutes and seconds
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element

            var timer = document.getElementById("timer")
            if(timer){
                timer.innerHTML = minutes + "m " + seconds + "s ";
            }
            // If the count down is finished, write some text
            if(distance < 0) {
                clearInterval(x);
                if(timer){
                    timer.innerHTML = "Timed";
                }
            }
        }, 1000);
    }

    showSavedAnswers(index, title, type){
        var saved = localStorage.getItem(title +" Question No. "+ index)
        if(saved != null || saved != undefined){
            if(type == "standard"){
                document.getElementById(saved).checked = true
            }
            if(type == "write"){
                $('#textfield').val(saved)
            }
            if(type == "multipleSelection"){
                var aux = JSON.parse(saved)
                for(let i=0; i<aux.length; i++){
                    $("input[value='"+aux[i]+"']").prop('checked', true)
                }
            }
            if(type == "dropdownListSelection"){
                var aux = JSON.parse(saved)
                for(let i=0; i<aux.length; i++){
                    $('#select'+i).val(aux[i])
                }
            }
        }
    }

    showSavedAnswersAlert(display){
        if(display){
            var labelSavedAnswer = document.getElementById("labelSavedAnswer")
            labelSavedAnswer.innerText = "Saved Answer"
        }
    }

    saveStandardAnswer(choice, title, index){
        localStorage.setItem(title +" Question No. "+ index, choice)
    }

    saveInputAnswer(type, title, index, options){
        var input
        if(type == "write"){
            input = $('#textfield').val()
            localStorage.setItem(title + " Question No. "+ index, input)
        }
        if(type == "multipleSelection"){
            input = []
            for(let i=0; i<options.length; i++){
                if($('#checkbox'+i).prop('checked')){
                    input.push($('#checkbox'+i).val())
                    localStorage.setItem(title +" Question No. "+ index, JSON.stringify(input))
                }
            }
        }
        if(type == "dropdownListSelection"){
            input = []
            for(let i=0; i<options.length; i++){
                    input.push($('#select'+i).val())
                    localStorage.setItem(title +" Question No. "+ index, JSON.stringify(input))
            }
        }
        return input
    }

/**
 * 
 * @param {number} score total score
 * @param {number} scoreCorrect correct answers
 */
    showScores(scoreCorrect, numQuestions, percentage, score, maxScore, questions){
        const quizEndHTML = `
        <div id="resultsContainer">
            <h1 id="resultsTitle">Ergebnis</h1>
            <hr>
            <p>Punktzahl: ${score}</p>
            <p>Maximale Punktzahl: ${maxScore}</p>
            <p>Richtig beanwortete Fragen: ${scoreCorrect}</p>
            <p>Gesamtzahl der Fragen: ${numQuestions}</p>
            <p>Prozentsatz der Richtig beanwortete fragen: ${percentage}%</p>
            <p>Wiederholungen: 1</p>
        </div>
        <br>
        `

        const element = document.getElementById("quiz")
        element.innerHTML = quizEndHTML    
        var resultsContainer = document.getElementById("resultsContainer");
        
        const reviewTitle = document.createElement("h1")
        reviewTitle.innerText = "Zusammenfassung"
        reviewTitle.id = "resultsTitle"
        resultsContainer.append(reviewTitle)
        
        for(let i=0; i<numQuestions; i++){
            //Question
            var questionText = document.createElement("p");
            questionText.innerText = i+1 +". Frage: " + questions[i].text[0].questions

            //Answered and Status
            var answered = document.createElement("p");
            var status = document.createElement("p")
            var value = localStorage.getItem(questions[i].title +" Question No. "+ i); 
            try {
                value = (JSON.parse(value))
                value = value.toString()
                answered.innerText ="Beanwortet: " + value

                questions[i].answer = questions[i].answer.toString()

                if(value == questions[i].answer){
                    status.innerText = "Status: Correct"
                } else{ status.innerText = "Status: Incorrect" }
            } catch (e) {
                answered.innerText ="Beanwortet: " + value

                for(let j=0; j<questions[i].answer.length; j++){
                    if(value === questions[i].answer[j] || value == questions[i].answer){
                        status.innerText = "Status: Correct"
                        break;
                    } else{ status.innerText = "Status: Incorrect" }
                }
                
            }
           
            //Correct Answer
            var correctAnswer = document.createElement("p");
            correctAnswer = "Richtige Antwort: " + questions[i].answer

            //no answered
            if(value == null || value == undefined){
                answered.innerText = "Beanwortet: Nicht beantwortet"
                status.innerText = "Beanwortet: Nicht beantwortet"
            }
            
            var divisionLine = document.createElement("hr");
            
            resultsContainer.append(questionText)
            resultsContainer.append(answered)
            resultsContainer.append(correctAnswer)
            resultsContainer.append(status)
            resultsContainer.append(divisionLine)
        }
    }


    /**
     * 
     * @param {number} currentIndex current of index of the question
     * @param {number} total total number of questions
     */
    showProgress(currentIndex, total){
        const element = document.getElementById("progress");
        
            element.innerHTML = `${currentIndex+1} / ${total}`;
        
    }

    createNavegationButtons(create_btnBack, createBtnNext){
        const buttonsContainer = document.getElementById("navegationButtonsContainer")
        buttonsContainer.innerHTML = "";
        if(create_btnBack){
            this.createButtonBack()
        }
        if(createBtnNext){
            this.createButtonForward()
        }
    }

    createActionButtons(createBtnSave){
        const buttonsContainer = document.getElementById("actionButtonsContainer")
        buttonsContainer.innerHTML = "";

        if(createBtnSave){
            this.createButtonSave()
        }
        this.createButtonSend()
        

        const labelSavedAnswer = document.createElement("label")
        buttonsContainer.append(labelSavedAnswer)
        labelSavedAnswer.id ="labelSavedAnswer"
    }

    createButtonForward(){
        const buttonsContainer = document.getElementById("navegationButtonsContainer")

        var btnForward = document.createElement("button")
        btnForward.id  ="buttonForward"
        btnForward.innerText = ">"
        btnForward.className = "navegationButtons"

        buttonsContainer.append(btnForward) 
    }

    createButtonBack(){
        const buttonsContainer = document.getElementById("navegationButtonsContainer")

        var btnBack = document.createElement("button")
        btnBack.id  ="buttonBack"
        btnBack.innerText = "<"
        btnBack.className = "navegationButtons"

        buttonsContainer.append(btnBack)
    }

    createButtonSave(){
        const buttonContainer = document.getElementById("actionButtonsContainer")

        var btnSave = document.createElement("button")
        btnSave.id  ="buttonSave"
        btnSave.innerText = "Save answer"
        btnSave.className = "actionButtons"
    
        buttonContainer.append(btnSave)
    }

    createButtonSend(){
        const buttonContainer = document.getElementById("actionButtonsContainer")

        var btnSend = document.createElement("button")
        btnSend.id  ="buttonSend"
        btnSend.innerText = "Send"
        btnSend.className = "actionButtons"
    
        buttonContainer.append(btnSend)
    }    

    disableButtonBack(){
        var btn = document.getElementById("buttonBack");
        btn.disabled = true;
    }

    disableButtonNext(){
        var btn = document.getElementById("buttonForward");
        btn.disabled = true;
    }

    disableButtonSend(){
        var btn = document.getElementById("buttonSend");
        btn.disabled = true;
        btn.style = "color: rgb(146, 144, 144)"
    }
    //Enable buttons
    enableButtonBack(){
        var btn = document.getElementById("buttonBack");
        btn.disabled = false;
    }

    enableButtonNext(){
        var btn = document.getElementById("buttonForward");
        btn.disabled = false;
    }
    
    enableButtonSend(){
        var btn = document.getElementById("buttonSend");
        btn.disabled = false;
        btn.style = "color: rgb(0, 0, 0)"
    }

}