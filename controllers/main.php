<?php
include DOCROOT."models/contacts.php";
include DOCROOT."models/portfolio.php";
include DOCROOT."models/about.php";
function action_index(){
    renderView("main",["title"=>'MainePage']);
}
function action_portfolio(){
    $portfolio = model_portfolio();
    renderView("portfolio",
        ["title"=>'portfolio',
            "porto"=>$portfolio
        ]
    );
}
function action_contacts(){
    $phones = model_contacts_getPhobes();
    $operators = operators_const();
    renderView("contacts",
        ["title"=>'contacts',
            "ph"=>$phones,
            "op"=>$operators
        ]);
}
function action_about(){
    $about = model_about();
    renderView("about",["title"=>'about',
        "abUs" => $about
    ]);
}
