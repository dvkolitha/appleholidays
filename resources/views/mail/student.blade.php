@component('mail::message')
# Student's Details 

    Name: {{ $student->name }}
    DOB: {{ $student->dob }}
    Class: {{ $class }}
# Parent's Details
    @foreach($parents as $parent) 
      Name:{{ $parent->name }}
      Gender:{{ $parent->gender }}
      DOB:   {{ $parent->dob }}
    @endforeach   


Thanks,<br>
Appleholidays
@endcomponent
