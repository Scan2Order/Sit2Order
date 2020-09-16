 <<template>
 <div>
   <div class = "card">
   <div class = "card-body">
 <h3 class ="heading">User Rating</h3>
 <div class = "row">
     <div class="col-md-6">
         <star-rating v-model="rating":increment="0.5" text-class="custom-text"></star-rating>
     </div>
     <div class="col-md-6"></div>
 </div>
 <button @click = "setRating" class="btn btn-primary">Publish</button>
 <h3 class="heading">Reviews</h3>
 <div class="review-rating">
     <div class = "left-review">
       <div class="review-title">3.5</div>
       <div class="review-title">
           <span class="fa fa-star"></span>
           <span class = "fa fa-star"></span>
           <span class = "fa fa-star"></span>
           <span class = "fa fa-star-half-o"></span>
            <span class = "fa fa star-o"></span>
         </div>
</div>

       </div>
    </div>
</div>

 </template>
 
 <script>
 export default {
   data(){
       rating : 0;
   },

methods: {
setRating(){
    var pathArray = location.pathname.split('/');
    var uid = pathArray[2];
fetch('/api/rating/new',{
body:JSON.stringify({rating:this.rating, user:'1'}),
headers:{
    'content-type': 'application/json'
}

}) .then(res => res.json() )
.then(data => {
swal("Thank you")
}).catch(err => {
    swal('Failed', 'error');
})
}
}

 }

 
 </script>
 


 <style>
 *{
     box-sizing: border-box;
 }
 
 .fa{
     font-size: 25px;
 }

 .left-bar{
     float:left;
     width: 5%;
     margin-top:10px;
 }

 .right-bar{
     margin-top:10px;
     float: left;
     width: 95%;
 }

.row-bar:after{
    content:"";
    display: table;
    clear: both;
}

 </style>