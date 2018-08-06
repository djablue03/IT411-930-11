<form action= "{{route('crushes.store')}}" method="POST">
	{{ csrf_field() }}
	
<label>First name:</label>
<input type="text" name="first_name"/>
<br/>
<label>Last name:</label>
<input type="text" name="last_name"/>
<br/>
<label>FB Profile Link:</label>
<input type="text" name="fb_profile_link"/>
<br/><label>Contact number:</label>
<input type="text" name="contact_number"/>
<br/>
<button type="submit"> Add Crush </button>
</form>