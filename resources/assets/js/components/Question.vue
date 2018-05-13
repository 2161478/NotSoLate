<template>
    <div>
        <strong>{{ questionNumber }}. &nbsp;</strong>
        <strong>{{ question.text }} </strong>

        <div v-if="question.type === 'tf'">
            <input type="radio" name="currentQuestion" id="trueAnswer" v-model="answer" value="t"><label for="trueAnswer">True</label><br/>
            <input type="radio" name="currentQuestion" id="falseAnswer" v-model="answer" value="f"><label for="falseAnswer">False</label><br/>
        </div>

        <div v-if="question.type === 'mc'">
            <div v-for="(mcanswer,index) in question.answers">
                <input type="radio" :id="'answer'+index" name="currentQuestion" v-model="answer" :value="mcanswer"><label :for="'answer'+index">{{mcanswer}}</label><br/>
            </div>
        </div>
        <button v-if="questionNumber > 1" @click="back">Back</button>
        <button @click="next">Next</button>

    </div>
</template>

<script>
    export default {
        name: "Question",
        data() {
            return {
                answer:''
            }
        },
        props:['question','question-number'],
        methods:{
            next:function() {
                this.$emit('next', {answer:this.answer});
                this.answer = null;
            },
            back:function() {
                this.$emit('back', {answer:this.answer});
                this.answer = null;
            },
        }
    }
</script>

<style scoped>

</style>