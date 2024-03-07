<?php
$searchTerms = array(
    "Introduction to AJAX", "XMLHttpRequest Object", "Request Methods", 
    "Requests, Responses and Errors", "Cross-Origin Resource Sharing (CORS)",
     "Security Considerations", "AJAX Best Practices", "Making Asynchronous Requests", 
     "Updating Web Page Content Without Reloading", 
     "AJAX with Forms", "Single-page Applications (SPAs)", 
     "Progressive Web Applications (PWAs)", 
     "Performance Optimization Techniques"
);

if (isset($_POST['search_term'])) {
    $search_term = $_POST['search_term'];

    if (!empty($search_term)) {
        $output = '';
        foreach($searchTerms as $searchTerm) {
            if (strpos(strtolower($searchTerm), $search_term)) {
                $output .= "<li class='list-group-item'>$searchTerm</li>";
            }
        }
        echo $output;
    }
}