export class Question{
    /**
     * @param {*} title title of the quiz
     * @param {string} text  text of the question
     * @param {string[]} choices choices of the question
     * @param {*} answer answer of the question
     * @param {*} image image of the question
     */
    constructor(type, title, id, text, options, answer, media){
        this.type = type;
        this.title = title;
        this.id = id;
        this.text = text;
        this.options = options;
        this.answer = answer;
        this.media = media;
    }
    /**
     * 
     * @param {string} choice some text to guess
     * @returns {boolean} return true if the answer is correct
     */
    correctAnswer(choice) {
        return choice == this.answer;
    }
}