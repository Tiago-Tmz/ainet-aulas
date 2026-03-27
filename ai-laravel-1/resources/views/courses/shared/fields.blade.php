<div>
    <label for="inputAbbreviation">Abbreviation</label>
    <input type="text" name="abbreviation" id="inputAbbreviation" value="{{$course->abbreviation}}">
</div>
<div>
    <label for="inputName">Name</label>
    <input type="text" name="name" id="inputName" value="{{$course->name}}">
</div>
<div>
    <label for="inputName_pt">Name (PT)</label>
    <input type="text" name="name_pt" id="inputName_pt" value="{{$course->name_pt}}">
</div>
<div>
    <label for="inputType">Type of course</label>
    <select name="type" id="inputType">
        <option {{$course->type == 'Degree' ? 'selected' : ''}}>Degree</option>
        <option {{$course->type == 'Master' ? 'selected' : ''}}>Master</option>
        <option {{$course->type == 'TESP' ? 'selected' : ''}}>TESP</option>
    </select>
</div>
<div>
    <label for="inputSemesters">Semesters</label>
    <input type="text" name="semesters" id="inputSemesters" value="{{$course->semesters}}">
</div>
<div>
    <label for="inputECTS">ECTS</label>
    <input type="text" name="ECTS" id="inputECTS" value="{{$course->ECTS}}">
</div>
Marco Monteiro 44
<div>
    <label for="inputPlaces">Places</label>
    <input type="text" name="places" id="inputPlaces" value="{{$course->places}}">
</div>
<div>
    <label for="inputContact">Contact</label>
    <input type="text" name="contact" id="inputContact" value="{{$course->contact}}">
</div>
<div>
    <label for="inputObjectives">Objectives</label>
    <textarea name="objectives" id="inputObjectives" rows=10>
 {{$course->objectives}}
 </textarea>
</div>
<div>
    <label for="inputObjectives_pt">Objectives (PT)</label>
    <textarea name="objectives_pt" id="inputObjectives_pt" rows=10>
 {{$course->objectives_pt}}
 </textarea>
</div>