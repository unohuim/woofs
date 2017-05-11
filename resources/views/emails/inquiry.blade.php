<!DOCTYPE html>

<html>

<head>

	<title></title>
</head>

<body>

    <p>Hey big guy... looks like your hard work is paying off yet again</p>

    
    <h3>Inquiry Details</h3>

    <p><strong>Pet Name: </strong> {{ $inquiry->petname }} </p>
    <p><strong>Name: </strong> {{ $inquiry->name }} </p>
    <p><strong>Closest Intersection: </strong> {{ $inquiry->intersection }} </p>
    <p><strong>Email Address: </strong> {{ $inquiry->email }} </p>
    <p><strong>Phone No: </strong> {{ $inquiry->phone }} </p>
    <p><strong>Message: </strong> {{ $inquiry->message }} </p>
  
    <hr />
    <p>This message was sent from the IP Address: {{ $inquiry->ip }} on {{ $inquiry->date }} at {{ $inquiry->time }} & form located at {{ $inquiry->referer }}</p>
            
</body>

</html>