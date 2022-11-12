<template>
    <div class="container">
        <div class="col" style="border-radius: 10px;background: var(--white);border-style: none;">
            <div class="row d-xl-flex justify-content-xl-center" style="padding-top: 25px;">
                <div class="col-5"><img class="img-fluid justify-content-xl-center" :src="CurrentModel.photo" style="border-radius: 10px;"></div>
            </div>
            <div class="row d-xl-flex justify-content-xl-center" style="padding-bottom: 25px;padding-top: 25px;">
                <div class="col-5"><input class="form-control-plaintext" type="text" readonly="" value="vbcvbvc" style="text-align: center;font-family: Roboto, sans-serif;font-weight: bold;"></div>
            </div>
            <div class="row d-xl-flex">
                <div class="col-6 offset-3" style="padding-bottom: 50px;"><input class="border rounded" type="text" style="box-shadow: -6px 6px 20px 0px #E7BEA3;font-family: Roboto, sans-serif;width: 100%;">
                </div>
            </div>
            <div class="row d-xl-flex justify-content-xl-center">
                <div class="col-5 d-xl-flex justify-content-xl-center" style="padding-bottom: 25px;"><button class="btn btn-primary" type="button" @click="change()" style="background: #FF6700;width: 324px;font-family: Roboto;font-style: normal;font-weight: bold;">Button</button>
                </div>
            </div>
            <div class="row">
                <div class="col-6 d-xl-flex justify-content-xl-center">
                    <p><i class="icon-like"></i>Paragraph</p>
                </div>
                <div class="col-6 d-xl-flex justify-content-xl-center">
                    <p><i class="icon-dislike"></i>{{}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            input: '',
            response:'',
            CurrentModel:'',
            randomNumber:0,
            total: this.response.lenght,
            correct:0,
            wrong:0,

            }
        }, 
        props: ['route'],
 
        created() {
               axios.get(this.route)
                .then((response) => {
                    this.response = response.data.data.map((item)=>{
                        return { 
                            id: item.id,
                            words:item.words,
                            photo:item.photo,
                            answer:'',

                        }
                    })

                })
        
            
        },
        methods: {
        check() {
           
          }
        ,
        change() {
            this.randomNumber = Math.floor(Math.random() * 12);
            this.CurrentModel= this.response.filter((item)=>item.id === this.randomNumber)[0]
          }
        },

    }
</script>
