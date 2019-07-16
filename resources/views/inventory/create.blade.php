
<form action="{{route('inventory.chair.add')}}" method="POST">
	@csrf
	<input type="text" name="model">
	<input type="text" name="description">
	<button id="submit">Submit</button>
</form>