<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
@if (count($errors)>0)
@foreach ($errors>all() as $error)
    {{ $error }}
@endforeach
@endif
<div class="col-lg-offset-f col-lg-4">
<form action="form" method="post" id="form">
{{ csrf_field() }}
<input type="text" class="form-control">
@captcha()
<input type="submit" >
</form>
</div>
</body>
<script>
$(document).ready(function(){
   // $('#form').submit();
});
</script>

<html>
    <head>
<div>
        <h3 class="text-center">Create Employee</h3>
        <div class="row">
            <div class="col-md-6">
                
                    <div class="form-group">
                        <label>Regular Price</label>
                        <input type="text" class="form-control" name="price" value="1000">
                    </div>
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" name="disc" onkeyup="calculatePrice()">
                    </div>
                    
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" name="med" onkeyup="calculatePrice()">
                    </div>
                    
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" name="discount">
                    </div>
            </div>
        </div>
    </div>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" 
type="text/javascript">

function calculatePrice(){
$(document).ready(function(){
var price=$('input[name="price"]').val();
var tot=0;
var out=0;


  var disc =parseInt($('input[name="disc"]').val());
  var med =parseInt($('input[name="med"]').val());
  tot=0;
  if( disc>0) tot=tot+disc;
  if( med>0) tot=tot+med;
  console.log(tot);
  out=price-(price*(tot/100));
  $('input[name="discount"]').val(out);
}
});


 </script>


 <select name="grade" v-model="employee.grade" class="form-control">
 
  <option value="6">Six</option>
</select>
                    </div>
             <br>
             <div class="form-group">
                        <label>Basic</label>
                        <input type="text" class="form-control" id="lower">
                    </div>
             <label>House Rent</label><br>
             <input name="qty" id ="qty" type="number" value ="20"><br>
             <br>

             <label>Medical Allowances</label><br>
             <input name="med" id ="med" type="number" value = "15"><br>
             <br>
             <input type="button" name="Price" value="Calculate Price" onclick="calculatePrice(event)"/>
             <input type="submit" value="Submit Order"/>
        </form>
    </html>

    <script type="text/javascript"></script>
        <script>
        function calculatePrice() {

var quantity, type, price,lower,medical,toall,tome;
quantity = document.getElementById("qty").value;
medical = document.getElementById("med").value;
// type = document.getElementById("cardstype").value;
previous = document.getElementById("lower").value;
toall = previous*(quantity/100);
tome = previous*(medical/100);

price = previous-(toall + tome);


alert("6th grade total salary" + price );

}

        </script>