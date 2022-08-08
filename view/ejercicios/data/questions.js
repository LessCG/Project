import {Question} from '../models/Question.js';

var arr = [];
var data;

function add(value){
    arr.push(value)
};

function getData(){
    $.ajax({
        async: false,
        url:'readData.php',
        method: 'GET',
        dataType: 'json',
        success: function(response){
            data = JSON.stringify(response);
            data = JSON.parse(response);
            $.each(data, function(i){ 
                if(data[i].id == idQuestions) {
                    add(data[i])}
            });
        }
    });
}
getData();
export const questions =  arr.map(question=> new Question(
    question.type,
    question.title, 
    question.id,
    question.question, 
    question.options,
    question.answer,
    question.media));
