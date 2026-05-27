<h2>Add Student</h2>

<form action="/students/store" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>

    <input type="email" name="email" placeholder="Email"><br><br>

    <input type="text" name="course" placeholder="Course"><br><br>

    <input type="text" name="moblie no" placeholder="Mobile No"><br><br>


    <button type="submit">Save</button>
</form>