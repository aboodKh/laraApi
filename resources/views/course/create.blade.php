<div> a view(form) to let the user input course record details</div>
 {{-- using named route instead of hardcoding it --}}
<form method=post action={{route("courses.index")}}>
{{-- to prevent cross-site request forgery --}}
   @csrf  
   Enter course name: <input name="name"/>
   Enter course code: <input name="code">
   Enter course credit: <input type=number name="credit">
   Enter course category: <input name="cat">
   <input type=submit>
</form>