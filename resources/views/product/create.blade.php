<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body>

			<div>
				Name
				<input type="text" name="name" placeholder="Name">
			</div>
			<div>
				SKU
				<input type="text" name="sku" placeholder="SKU">
			</div>

        <button>Create</button>
    </body>
</html>
