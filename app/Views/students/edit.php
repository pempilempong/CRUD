<?php

    $this->extend('layout/main');
    $this->section('body');

?>
<h1>Edit Student</h1>
<form action="/students/update/<?= $student['id']; ?>"  method="POST"  enctype="multipart/form-data">
  <form action="/students/store" method = "POST" enctype="multipat/form-data">
  <div class="mb-3">
    <label for="studentName" class="form-label">Student Name</label>
    <input type="text" class="form-control" name="studentName" value=" <?= $student['Student_name']; ?>" >
  </div>
  <div class="mb-3">
    <label for="studentNum" class="form-label">Student Number</label>
    <input type="text" class="form-control" name="studentNum" value=" <?= $student['Student_id']; ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="studentSection" class="form-label">Student Section</label>
    <input type="text" class="form-control" name="studentSection" value=" <?= $student['Student_section']; ?>" >
  </div>
  <div class="mb-3">
    <label for="studentCourse" class="form-label">Student Course</label>
    <input type="text" class="form-control" name="studentCourse" value=" <?= $student['Student_course']; ?>">
  </div>
  <div class="mb-3">
    <label for="studentBatch" class="form-label">Student Batch</label>
    <input type="text" class="form-control" name="studentBatch" value=" <?= $student['Student_batch']; ?>">
  </div>
  <div class="mb-3">
    <label for="studentYear" class="form-label">Student Year Level</label>
    <input type="text" class="form-control" name="studentYear" value=" <?= $student['Student_year_level']; ?>">
  </div>
  <div class="mb-3">
    <label for="studentProfile" class="form-label">Student Profile</label>
    <input type="file" class="form-control" name="studentProfile" value=" <?= $student['Student_name']; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php

    $this->endSection('layout/main');

?>