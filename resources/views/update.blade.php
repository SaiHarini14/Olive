<h1> Update Favourite Details </h1>

<form action="" method="post" accept-charset="UTF-8">
    @method('put')
    {{ csrf_field() }}

    <label for="name">ID </label>
    <input type="text" name="id" value="{{ $data['id'] }}"><br>
    <label for="name">Enter Name</label>
    <input type="text" name="Name" value="{{ $data['name'] }}"><br>
    <label for="link">Enter Link</label>
    <input type="text" name="link" value="{{ $data['link'] }}"><br>
    <label for="type">Select Type</label>
    <select name="type_dropdown" class="favourite" style="max-height: 25px; margin-left:50px;">
        @foreach ($types as $type)
            <option value={{ $type->id }}>{{ $type->name }}</option>
        @endforeach
    </select><br><br>

    <label for="category">Select Category</label>
    <select name="category" class="favourite" style="max-height: 25px; margin-left:50px;">
        @foreach ($categories as $category)
            <option value={{ $category->id }}>{{ $category->name }}
            </option>
        @endforeach
    </select> <br /><br>
    <button class="btn btn-primary" type="submit">Update</a></button>
</form>

    <button class="btn btn-primary"> <a href ="/create"> Back</a></button>
