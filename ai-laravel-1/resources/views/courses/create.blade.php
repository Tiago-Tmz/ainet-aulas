<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course</title>
</head>

<body>
    <h2>New Course</h2>
    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        @include('courses.shared.fields')
        <div>
            <label for="inputAbbreviation">Abbreviation</label>
            <input type="text" name="abbreviation" id="inputAbbreviation">
        </div>
        <div>
            <label for="inputName">Name</label>
            <input type="text" name="name" id="inputName">
        </div>
        Marco Monteiro 25
        <div>
            <label for="inputName_pt">Name (PT)</label>
            <input type="text" name="name_pt" id="inputName_pt">
        </div>
        <div>
            <label for="inputType">Type of course</label>
            <select name="type" id="inputType">
                <option>Degree</option>
                <option>Master</option>
                <option>TESP</option>
            </select>
        </div>
        <div>
            <label for="inputSemesters">Semesters</label>
            <input type="text" name="semesters" id="inputSemesters">
        </div>
        <div>
            <label for="inputECTS">ECTS</label>
            <input type="text" name="ECTS" id="inputECTS">
        </div>
        <div>
            <label for="inputPlaces">Places</label>
            <input type="text" name="places" id="inputPlaces">
        </div>
        <div>
            <label for="inputContact">Contact</label>
            <input type="text" name="contact" id="inputContact">
        </div>
        <div>
            <label for="inputObjectives">Objectives</label>
            <textarea name="objectives" id="inputObjectives" rows=10></textarea>
        </div>
        <div>
            <label for="inputObjectives_pt">Objectives (PT)</label>
            <textarea name="objectives_pt" id="inputObjectives_pt" rows=10></textarea>
        </div>
        <div>
            <button type="submit" name="ok">Save new course</button>
        </div>
    </form>
</body>

</html>