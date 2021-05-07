@extends('layout.app')
@section('content')

<div class="row">
 <div class="col-md-6">
               <div class="form-group">
                        <label>Grade</label>
                        <select name="grade" v-model="employee.grade" class="form-control">
                         
                             <option value="6">Six</option>
                            </select>
                    </div>
                    <div class="form-group">
                    <label>Basic</label>
                        <input type="text" class="form-control" id="lower"> 
                        </div>
                    <div class="form-group">
                    <label>House Rent</label><br>
             <input name="qty" id ="qty" type="number" value ="20">
                    </div>
                    <div class="form-group">
                    <label>Medical Allowances</label><br>
             <input name="med" id ="med" type="number" value = "15">
                    </div>
                     <div class="form-group">
                     <input type="button" name="Price" value="Calculate Price"   onclick="calculatePrice(event)"/>
             <p id="msg"></p>                     

             <p id="msg5"></p>
             <p id="msg4"></p>
             <p id="msg3"></p>
             <p id="msg2"></p>
             <p id="msg1"></p>
                    </div>
               
            </div>

            
        
            <form method="post" action="{{route('store.new')}}">
            {{ csrf_field() }}
            <div class="col-md-6">
            <span class="h3">Salary Transfer to the Employee Account</span>

               <div class="form-group">
                        <select class="form-control" name="employee_id">
                <option :value="null">Employee</option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->employee_name}} Grade {{ $employee->grade}}</option>
                @endforeach
            </select>
                    </div>
                    
                    <div class="form-group">
                    <label>Amount</label>
                        <input type="number" class="form-control" name="new_amount"> 
                        </div>
                        <div class="mb-3 text-left">
                        <button type="submit" class="btn btn-info bg-ubs border-0 rounded-pill btn-lg mt-2 px-5 py-2">
                            Submit
                        </button>
                    </div>
                        </form>
                    
                        <div class="card-header">
            <span class="h3">Salary Sheet</span>
        </div>
                        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>Grade</th>
                 <th>Salary</th>
                  
            </tr>
            </thead>
            <tbody>
            @foreach ($dues as $due)
                            <tr>
                            <td>{{$due->employee->id}}</td>
                            <td>{{$due->employee->employee_name}}</td>
                            <td>{{$due->employee->grade}}</td>
                            <td>{{$due->new_amount}}</td>
                            </tr>
                        @endforeach
            </tbody>
        </table>

        <div class="card-header">
            <span class="h3">Total Paid Salary : {{$sum}}</span>
        </div>

        <div class="card-header">
            <span class="h3">Remaining Balance : {{$remaining_balance}}</span>
        </div>
               
            </div>
        </div>


    <script type="text/javascript"></script>
        <script>
        function calculatePrice() {

var quantity, type, price,lower,medical,toall,tome,price5,amount;
quantity = document.getElementById("qty").value;
medical = document.getElementById("med").value;
previous = document.getElementById("lower").value;
toall = previous*(quantity/100);
tome = previous*(medical/100);

price = previous-(toall + tome);
price5 = parseFloat(previous)+parseFloat(5000);
price4 = parseFloat(previous)+parseFloat(10000);
price3 = parseFloat(previous)+parseFloat(15000);
price2 = parseFloat(previous)+parseFloat(20000);
price1 = parseFloat(previous)+parseFloat(25000);

alert("6th grade total salary" + price );
document.getElementById("msg").innerHTML = "6th grade total salary is " + price ;
document.getElementById("msg5").innerHTML = "Basic grade of the 5th salary is " + price5 ;
document.getElementById("msg4").innerHTML = "Basic grade of the 4th salary is  " + price4 ;
document.getElementById("msg3").innerHTML = "Basic grade of the 3rd salary is  " + price3 ;
document.getElementById("msg2").innerHTML = "Basic grade of the 2nd salary is  " + price2 ;
document.getElementById("msg1").innerHTML = "Basic grade of the 1st salary is " + price1 ;

}

        </script>
@endsection