@extends('common.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('calculate.submit')}}">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    First Input
                </label>
                
                <input 
                    type="text" 
                    class="form-control" 
                    id="exampleFormControlInput1"
                    name="firstnumber">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    Second Input
                </label>
                
                <input 
                    type="text" 
                    class="form-control" 
                    id="exampleFormControlInput1" 
                    name="secondnumber">
            </div>

             <div class= "center">
                    <button type="submit"  class="btn btn-primary ">
                        Submit
                    </button>
                </div>
    
        </form>
    </div>
@endsection

