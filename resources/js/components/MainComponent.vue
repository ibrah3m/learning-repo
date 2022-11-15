<template>
    <section>
        <div class="container border rounded" style="background: #ffffff;">
            <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center"
                style="padding-top: 25px;">
                <div class="col-12"><img class="img-fluid justify-content-xl-center" :src="CurrentModel.photo"
                        style="border-radius: 10px;"></div>
                <div class="col-12 d-flex justify-content-center"><input class="form-control-plaintext" type="text"
                        readonly=""  :value="CurrentModel.words[CurrentModel.local]"
                        style="text-align: center;font-family: Roboto, sans-serif;font-weight: bold;"></div>
                <div class="col-12" style="padding-bottom: 50px;"><input class="border rounded form-control-lg"
                        type="text" v-model="inputwords"
                        style="box-shadow: -6px 6px 20px 0px #E7BEA3;font-family: Roboto, sans-serif;width: 100%;">
                </div>
                <div class="col-12 d-flex justify-content-center" style="padding-bottom: 25px;"><button
                        class="btn btn-primary" type="button"  @click="check()"
                        style="background: #FF6700;width: 324px;font-family: Roboto;font-style: normal;font-weight: bold;">Let's check</button>
                </div>
                <div
                    class="col-6 text-center order-last order-sm-first order-md-last order-lg-last order-xl-last order-xxl-last">
                    <p><i class="icon-like"></i> {{ correct }} / {{ total }}</p>
                </div>
                <div class="col-6 text-center order-sm-first order-md-last order-lg-last order-xl-last">
                    <p><i class="icon-dislike"></i> {{ wrong }} / {{ total }}</p>
                </div>
            </div>
        </div>
    </section>

</template> 

<script>

export default {

    data() {


        return {
            inputwords: '',
            response: [],
            CurrentModel: {
                id: '',
                photo: '',
                local: '',
                words: {
                    en: '',
                    sr: '',

                },
            },
            total: 0,
            correct: 0,
            wrong: 0,

        }
    },
    props: ['route'],

    created() {
        axios.get(this.route)
            .then((response) => {
                this.response = response.data.data.map((item) => {
                    let local=['en','sr']//better if this  come from controller
                    return {
                        id: item.id,
                        words: item.words,
                        photo: item.photo,
                        answered: false,
                        local: local[this.setrandomnumber(local.length)]

                    }
                })
                this.total = this.response.length

                this.select()//Initally select random question to start
            })


    },

    methods: {
        check() {
            if (typeof this.CurrentModel !== 'undefined' || variable !== null) {
                if (
                   (this.CurrentModel.local ==="sr" && this.CurrentModel.words.en.toLowerCase() === this.inputwords.toLowerCase()) || (this.CurrentModel.local =="en" && this.CurrentModel.words.sr.toLowerCase() === this.inputwords.toLowerCase())
                   ) {
                    this.change()
                    this.correct++
                }
                else {

                    this.wrong++
                   

                }
                
                this.select()
            }
        }
        ,
        setrandomnumber(max) {
            return Math.floor(Math.random() * max);
        },
        change() {
            let currentIndex = this.response.findIndex(item => item.id == this.CurrentModel.id);
            this.response[currentIndex].answered = true;


        },
        select() {

            let filltered = this.response.filter((item) => item.answered == false)
            if (filltered.length > 0) {
                let random = this.setrandomnumber(filltered.length);
                this.CurrentModel = filltered[random];//select next question randomly 
            } else {
                window.location.reload();//after finish all the question reload the page 

            }

        },

    },

}
</script>
