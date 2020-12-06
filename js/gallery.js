import {fetchData} from "./components/TheDataMiner.js";
 import miniCard from "./components/miniCard.js";



const myVM = (() => {

    

    let vue_em = new Vue({
            
        data:{
            message: "Welcome To My Portfolio Gallery!",
            show_bio_data: false,
    
            cars:[],
    
            carsData: {}
                
        },
    
            mounted:function()
            {
                console.log("Vue is mounted, trying fetch for initial data");
    
                fetchData("./includes/index.php")
                .then(data=>{
                        data.forEach(car=>this.cars.push(car));
                    })
                    .catch(err=>console.error(err));
            },
    
        updated:function(){
            console.log('Vue just updated the DOM')
        },  
    
        methods: {
    
            logClicked()
            {
                console.log("function fired on click!!");
            },
    
            headerCall()
            {
                console.log("header is fired");
            },
    
            carData(target){
                console.log("Clicked to view car data", target, target.name);
                    this.show_bio_data = true;
                    this.carsData = target;
                    console.log("DATABASE FETCH", this.carsData)
            },
    
            },
            
            components:{
                "car-card": miniCard
            }
    
    }).$mount("#app");
    })();