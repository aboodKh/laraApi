<div> a view that show a course record</div>

<div> {{$course->id}}</div>

<form action={{route("courses.destroy", $course->id )}} method="post" >
    @csrf
    {{-- to override the post http verb to delete verb --}}
    {{-- <input type="hidden" name="_method" value="delete"> --}}
    @method("delete")
    <button>delete course</button>
</form>
