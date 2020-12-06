export default {

        name: "miniCard",

    data: function(){
        return{
                myName: this.item.name,
                myRole: this.item.Description,
            }
        },
    props: ["item"],

    mounted:function(){
            console.log(`loaded a ${this.item.name}'s card`);
        },
    methods: {
        
            logClicked()
            {
                console.log(`function fired on click from ${this.item.name}'s COMPONENTS!!`);
            }
        }
}