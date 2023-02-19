<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Project Submission</title>
</head>
<body>
<h1>New project submission</h1>
<p>A new project submission has been received:</p>
<ul>
    <li>Type of business: {{ $submission->type_of_business }}</li>
    <li>Project budget: {{ $submission->project_budget }}</li>
    <li>Design created/provided: {{ $submission->designCreatedOrProvided }}</li>
    <li>Required pages: {{ $submission->required_pages }}</li>
    <li>Websites for inspiration: {{ $submission->websitesForInspiration }}</li>
    <li>Project start date: {{ $submission->project_start_date }}</li>
    <li>Project complete date: {{ $submission->project_complete_date }}</li>
    <li>Other details: {{ $submission->other_details }}</li>
    <li>First name: {{ $submission->first_name }}</li>
    <li>Last name: {{ $submission->last_name }}</li>
    <li>Email address: {{ $submission->email_address }}</li>
    <li>Phone number: {{ $submission->phone_number }}</li>
</ul>
</body>
</html>
