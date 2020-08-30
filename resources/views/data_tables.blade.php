@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Charts
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/flot_charts.css')}}">
    <!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-th"></i>
                        Data Tables
                    </h4>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Tables</a>
                        </li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-12 data_tables">
                    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Datatable with Table Tools
                        </div>
                        <div class="card-body p-t-25">
                            <div class="">
                                <div class="pull-sm-right">
                                    <div class="tools pull-sm-right"></div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Department</th>
                                    <th>Salary</th>
                                    <th>Company</th>
                                </tr>
                                </thead>
                                <tbody><tr><td>Isaiah</td><td>Reichel</td><td>Clothing</td><td>$2363</td><td>Reichert, Haley and Mayer</td></tr><tr><td>Gertrude</td><td>Watsica</td><td>Books</td><td>$5439</td><td>Hahn LLC</td></tr><tr><td>Keyshawn</td><td>Gutmann</td><td>Shoes</td><td>$3748</td><td>Pagac and Sons</td></tr><tr><td>Coralie</td><td>Hoppe</td><td>Clothing</td><td>$2369</td><td>Torp - Batz</td></tr><tr><td>Vita</td><td>Eichmann</td><td>Home</td><td>$8997</td><td>Braun - Abernathy</td></tr><tr><td>Kurtis</td><td>Graham</td><td>Beauty</td><td>$6912</td><td>Satterfield - Lockman</td></tr><tr><td>Elise</td><td>Mante</td><td>Music</td><td>$7884</td><td>Gibson - Hills</td></tr><tr><td>Sydnee</td><td>Lemke</td><td>Shoes</td><td>$4999</td><td>Roob Inc</td></tr><tr><td>Bridget</td><td>Shanahan</td><td>Home</td><td>$4412</td><td>Klein - Ryan</td></tr><tr><td>Sofia</td><td>Dare</td><td>Music</td><td>$6230</td><td>McCullough, Reilly and Rempel</td></tr><tr><td>Allison</td><td>Adams</td><td>Sports</td><td>$2658</td><td>Will, Ryan and Casper</td></tr><tr><td>Reese</td><td>Grant</td><td>Movies</td><td>$6288</td><td>Ryan - Stehr</td></tr><tr><td>Carlo</td><td>Pagac</td><td>Jewelery</td><td>$8824</td><td>Mante, Conroy and Lockman</td></tr><tr><td>Glenna</td><td>Kuphal</td><td>Electronics</td><td>$2494</td><td>Williamson - Walter</td></tr><tr><td>Arthur</td><td>Rath</td><td>Shoes</td><td>$7859</td><td>Block - Cruickshank</td></tr><tr><td>Estell</td><td>Ward</td><td>Music</td><td>$5779</td><td>Willms - Harber</td></tr><tr><td>Zackery</td><td>Cartwright</td><td>Outdoors</td><td>$7859</td><td>Blick and Sons</td></tr><tr><td>Vladimir</td><td>Kreiger</td><td>Grocery</td><td>$5337</td><td>Predovic - Stiedemann</td></tr><tr><td>Edd</td><td>Satterfield</td><td>Computers</td><td>$4131</td><td>Wilderman, Volkman and Hyatt</td></tr><tr><td>Josh</td><td>Gleichner</td><td>Industrial</td><td>$6370</td><td>Ruecker and Sons</td></tr><tr><td>Nyasia</td><td>Flatley</td><td>Tools</td><td>$7303</td><td>Schultz LLC</td></tr><tr><td>Ansel</td><td>Schmidt</td><td>Garden</td><td>$3206</td><td>Gutmann Group</td></tr><tr><td>Reinhold</td><td>Murphy</td><td>Automotive</td><td>$3803</td><td>Grant - Effertz</td></tr><tr><td>Patience</td><td>Rowe</td><td>Industrial</td><td>$2059</td><td>Gutmann LLC</td></tr><tr><td>Mack</td><td>Bechtelar</td><td>Computers</td><td>$8387</td><td>Kuvalis Group</td></tr><tr><td>Shemar</td><td>Schroeder</td><td>Shoes</td><td>$4877</td><td>Huels - Kling</td></tr><tr><td>Benjamin</td><td>Walker</td><td>Beauty</td><td>$9479</td><td>Stamm, Howe and Mraz</td></tr><tr><td>Jana</td><td>Pouros</td><td>Books</td><td>$6469</td><td>Pollich and Sons</td></tr><tr><td>Favian</td><td>Turner</td><td>Health</td><td>$8729</td><td>Fritsch - Funk</td></tr><tr><td>Cyril</td><td>Wolff</td><td>Computers</td><td>$9357</td><td>Runte Inc</td></tr><tr><td>Enrique</td><td>Lakin</td><td>Automotive</td><td>$8676</td><td>Ziemann - Dach</td></tr><tr><td>Zane</td><td>Hayes</td><td>Shoes</td><td>$3308</td><td>Luettgen Inc</td></tr><tr><td>Jennings</td><td>Hartmann</td><td>Grocery</td><td>$4084</td><td>Mosciski - Cummerata</td></tr><tr><td>Muhammad</td><td>Kiehn</td><td>Computers</td><td>$7328</td><td>Nolan - Champlin</td></tr><tr><td>Ned</td><td>Rohan</td><td>Electronics</td><td>$4029</td><td>Gislason - Rau</td></tr><tr><td>Nestor</td><td>Wisoky</td><td>Books</td><td>$4923</td><td>Buckridge LLC</td></tr><tr><td>Mark</td><td>O'Connell</td><td>Beauty</td><td>$9228</td><td>Kohler, Huels and Grimes</td></tr><tr><td>Sigmund</td><td>Kuphal</td><td>Kids</td><td>$4319</td><td>O'Connell Inc</td></tr><tr><td>Yasmeen</td><td>Trantow</td><td>Home</td><td>$3879</td><td>Will - Zboncak</td></tr><tr><td>Kory</td><td>Dibbert</td><td>Outdoors</td><td>$5853</td><td>Rosenbaum - Klocko</td></tr></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE1 TABLE PORTLET-->
                    <!-- BEGIN EXAMPLE2 TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Show/Hide Columns
                        </div>
                        <div class="card-body m-t-35">
                            <div class="float-md-right text-center m-t-5">
                                <div class="btn-group show-hide">
                                    <a class="btn btn-primary" href="#" data-toggle="dropdown">
                                        Columns
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div id="sample_4_column_toggler" class="dropdown-menu dropdown-checkboxes dropdown_checkbox_margin_left float-right">
                                        <label>
                                            <input type="checkbox" checked data-column="1">Name</label>
                                        <label>
                                            <input type="checkbox" checked data-column="2">Age</label>
                                        <label>
                                            <input type="checkbox" checked data-column="3">Location</label>
                                        <label>
                                            <input type="checkbox" checked data-column="4">Contact</label>
                                        <label>
                                            <input type="checkbox" checked data-column="5">Email</label>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table_res" id="sample_4">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th class="hidden-xs">Location</th>
                                    <th class="hidden-xs">Contact</th>
                                    <th class="hidden-xs">Email</th>
                                </tr>
                                </thead>
                                <tbody><tr><td>Kiana Hahn</td><td>50</td><td>New Jonatan</td><td>365-997-1149</td><td>Kiana73@hotmail.com</td></tr><tr><td>Octavia Gibson</td><td>76</td><td>Lake Breanneville</td><td>778-708-0735</td><td>Octavia_Gibson17@gmail.com</td></tr><tr><td>Julia Reichel</td><td>24</td><td>North Darronberg</td><td>736-915-3862</td><td>Julia.Reichel92@yahoo.com</td></tr><tr><td>Justine Schowalter</td><td>68</td><td>East Jamirview</td><td>294-283-9728</td><td>Justine94@gmail.com</td></tr><tr><td>Maxwell Zemlak</td><td>54</td><td>Eunahaven</td><td>509-542-4821</td><td>Maxwell.Zemlak@yahoo.com</td></tr><tr><td>Maribel Gerhold</td><td>71</td><td>Estelletown</td><td>957-879-7629</td><td>Maribel.Gerhold@gmail.com</td></tr><tr><td>Yazmin Turcotte</td><td>31</td><td>Andrewbury</td><td>110-791-2923</td><td>Yazmin1@yahoo.com</td></tr><tr><td>Rahul Tromp</td><td>67</td><td>Lake Briceview</td><td>729-132-8087</td><td>Rahul28@yahoo.com</td></tr><tr><td>Jasmin Gusikowski</td><td>73</td><td>North Abigailshire</td><td>903-765-3090</td><td>Jasmin.Gusikowski@yahoo.com</td></tr><tr><td>Cale Gleason</td><td>32</td><td>Lake Genevieve</td><td>759-886-4400</td><td>Cale.Gleason@yahoo.com</td></tr><tr><td>Kayley Kerluke</td><td>75</td><td>South Trishaborough</td><td>279-286-5278</td><td>Kayley.Kerluke@gmail.com</td></tr><tr><td>Floyd Farrell</td><td>30</td><td>Wymanfurt</td><td>796-336-6537</td><td>Floyd.Farrell18@yahoo.com</td></tr><tr><td>Zackary Daniel</td><td>24</td><td>Janicetown</td><td>880-030-1600</td><td>Zackary79@hotmail.com</td></tr><tr><td>Santos Kunde</td><td>42</td><td>Baumbachstad</td><td>198-036-6433</td><td>Santos.Kunde33@yahoo.com</td></tr><tr><td>Dominique Berge</td><td>78</td><td>Aniyahmouth</td><td>779-004-1917</td><td>Dominique.Berge18@yahoo.com</td></tr><tr><td>Fabian Dickinson</td><td>54</td><td>Jerrellfort</td><td>483-827-5678</td><td>Fabian39@hotmail.com</td></tr><tr><td>Rosie White</td><td>40</td><td>Labadieshire</td><td>275-183-8949</td><td>Rosie61@yahoo.com</td></tr><tr><td>Karlie Cartwright</td><td>53</td><td>East Rubie</td><td>553-077-5020</td><td>Karlie.Cartwright19@hotmail.com</td></tr><tr><td>Grace Romaguera</td><td>41</td><td>Kutchshire</td><td>577-578-2307</td><td>Grace_Romaguera71@hotmail.com</td></tr><tr><td>Gerhard Dietrich</td><td>36</td><td>DuBuqueville</td><td>513-028-9142</td><td>Gerhard32@gmail.com</td></tr><tr><td>Francisca Hoeger</td><td>32</td><td>Novashire</td><td>998-135-3293</td><td>Francisca28@hotmail.com</td></tr><tr><td>Kendrick Dicki</td><td>61</td><td>East Toneyview</td><td>564-020-2377</td><td>Kendrick_Dicki@gmail.com</td></tr><tr><td>Priscilla Mosciski</td><td>49</td><td>Arnoview</td><td>247-303-7787</td><td>Priscilla.Mosciski27@yahoo.com</td></tr><tr><td>Emilia Quigley</td><td>35</td><td>Port Theodore</td><td>799-808-7144</td><td>Emilia_Quigley@yahoo.com</td></tr><tr><td>Lora Eichmann</td><td>61</td><td>Madysonshire</td><td>048-143-3979</td><td>Lora.Eichmann84@hotmail.com</td></tr><tr><td>Clarabelle Ortiz</td><td>73</td><td>Bergstromburgh</td><td>078-181-4484</td><td>Clarabelle50@hotmail.com</td></tr><tr><td>Vidal Schoen</td><td>61</td><td>Evelineberg</td><td>646-285-6354</td><td>Vidal6@hotmail.com</td></tr><tr><td>Magdalen Gerlach</td><td>77</td><td>Port Bernita</td><td>705-210-0934</td><td>Magdalen70@hotmail.com</td></tr><tr><td>Noe Gislason</td><td>37</td><td>Hoyttown</td><td>451-812-2902</td><td>Noe.Gislason@yahoo.com</td></tr><tr><td>Jeff Schimmel</td><td>72</td><td>Celiabury</td><td>443-011-6606</td><td>Jeff.Schimmel37@yahoo.com</td></tr><tr><td>Tyrell O'Reilly</td><td>21</td><td>Port Isaiahton</td><td>586-140-4624</td><td>Tyrell.OReilly70@gmail.com</td></tr><tr><td>Gene Erdman</td><td>27</td><td>Maureentown</td><td>480-708-5384</td><td>Gene.Erdman@gmail.com</td></tr><tr><td>Milo Spinka</td><td>78</td><td>Lakinbury</td><td>587-441-1827</td><td>Milo99@yahoo.com</td></tr><tr><td>Iva Hegmann</td><td>79</td><td>Smithside</td><td>496-238-5308</td><td>Iva.Hegmann@gmail.com</td></tr><tr><td>Hal Mayer</td><td>51</td><td>North Jeanshire</td><td>533-082-9278</td><td>Hal_Mayer@gmail.com</td></tr><tr><td>Garret Will</td><td>58</td><td>New Evelyn</td><td>878-572-7402</td><td>Garret_Will33@yahoo.com</td></tr><tr><td>Reyes Stehr</td><td>70</td><td>North Giles</td><td>011-439-1435</td><td>Reyes_Stehr@yahoo.com</td></tr><tr><td>Abagail Predovic</td><td>40</td><td>Krystinaburgh</td><td>222-092-1224</td><td>Abagail6@yahoo.com</td></tr><tr><td>Bridie Gerlach</td><td>59</td><td>New Elsie</td><td>486-238-7849</td><td>Bridie.Gerlach30@hotmail.com</td></tr><tr><td>Natalie Renner</td><td>54</td><td>North Maiyahaven</td><td>987-939-9063</td><td>Natalie_Renner60@gmail.com</td></tr><tr><td>Mandy Buckridge</td><td>62</td><td>Kihnbury</td><td>712-815-4573</td><td>Mandy75@gmail.com</td></tr><tr><td>Matilda Green</td><td>60</td><td>Gaylordport</td><td>404-572-7719</td><td>Matilda_Green61@yahoo.com</td></tr><tr><td>Brandon Koch</td><td>62</td><td>East Adonis</td><td>004-535-4509</td><td>Brandon.Koch@yahoo.com</td></tr></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE2 TABLE PORTLET-->
                    <!-- BEGIN EXAMPLE3 TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white ">
                            <i class="fa fa-table"></i> Scroller
                        </div>
                        <div class="card-body p-t-10">
                            <div class="m-t-25">
                                <table class="table table-striped table-bordered table-hover" id="sample_5">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>DOB</th>
                                        <th>Location</th>
                                    </tr>
                                    </thead>
                                    <tbody><tr><td>Walton Walter</td><td>Walton_Walter63</td><td>1973-1-22</td><td>West Queenview</td></tr><tr><td>Maggie Rath</td><td>Maggie_Rath54</td><td>1982-5-21</td><td>South Gastonmouth</td></tr><tr><td>Kylee Flatley</td><td>Kylee_Flatley78</td><td>1989-3-26</td><td>Lake Kayden</td></tr><tr><td>Mortimer Auer</td><td>Mortimer57</td><td>1990-3-6</td><td>West Anniefort</td></tr><tr><td>Birdie Donnelly</td><td>Birdie_Donnelly60</td><td>1971-7-2</td><td>South Estella</td></tr><tr><td>Era Kutch</td><td>Era.Kutch95</td><td>1978-10-23</td><td>West Lucashaven</td></tr><tr><td>Josefa VonRueden</td><td>Josefa51</td><td>1991-6-3</td><td>Lake Erica</td></tr><tr><td>Alexandrine Greenholt</td><td>Alexandrine54</td><td>1992-8-6</td><td>Kristoferton</td></tr><tr><td>Larue Romaguera</td><td>Larue.Romaguera</td><td>1960-7-26</td><td>Port Jenniefort</td></tr><tr><td>Lurline Swaniawski</td><td>Lurline97</td><td>1943-10-4</td><td>East Brian</td></tr><tr><td>Vallie Hintz</td><td>Vallie65</td><td>1943-8-4</td><td>South Darionshire</td></tr><tr><td>Rahul Walter</td><td>Rahul93</td><td>1988-8-16</td><td>New Clarabelle</td></tr><tr><td>Alta Hickle</td><td>Alta_Hickle</td><td>1976-3-4</td><td>Port Vance</td></tr><tr><td>Brayan Windler</td><td>Brayan.Windler73</td><td>1961-1-28</td><td>Walkerborough</td></tr><tr><td>Antone Block</td><td>Antone.Block</td><td>1983-7-23</td><td>Port Eldaborough</td></tr><tr><td>Serena Pfannerstill</td><td>Serena_Pfannerstill</td><td>1950-11-10</td><td>West Cieloview</td></tr><tr><td>Brittany Little</td><td>Brittany2</td><td>1943-8-23</td><td>Lenorabury</td></tr><tr><td>Tyrese Willms</td><td>Tyrese_Willms3</td><td>1992-2-12</td><td>Port Stonechester</td></tr><tr><td>Reese Hauck</td><td>Reese.Hauck40</td><td>1961-8-16</td><td>McDermottshire</td></tr><tr><td>Marie Maggio</td><td>Marie.Maggio</td><td>1975-5-4</td><td>New Margarett</td></tr><tr><td>Rosella Monahan</td><td>Rosella_Monahan</td><td>1975-4-7</td><td>New Robbiefurt</td></tr><tr><td>Beau Monahan</td><td>Beau89</td><td>1943-11-25</td><td>Port Amya</td></tr><tr><td>Julia Metz</td><td>Julia.Metz</td><td>1958-1-7</td><td>Port Elfriedahaven</td></tr><tr><td>Tatyana Terry</td><td>Tatyana_Terry</td><td>1954-2-23</td><td>North Javon</td></tr><tr><td>Lizeth Kutch</td><td>Lizeth.Kutch</td><td>1944-7-8</td><td>Lake Adaline</td></tr><tr><td>Anthony Hackett</td><td>Anthony.Hackett54</td><td>1970-9-7</td><td>South Joanaborough</td></tr><tr><td>Kaya McDermott</td><td>Kaya49</td><td>1984-2-17</td><td>North Robbie</td></tr><tr><td>Antonia Auer</td><td>Antonia23</td><td>1952-8-2</td><td>Ardenfurt</td></tr><tr><td>Marisa Cassin</td><td>Marisa_Cassin</td><td>1980-9-8</td><td>Lake Monserrateton</td></tr><tr><td>Curt Kassulke</td><td>Curt57</td><td>1942-10-9</td><td>North Johnnychester</td></tr><tr><td>Waino Stiedemann</td><td>Waino.Stiedemann</td><td>1970-9-24</td><td>West Kianburgh</td></tr><tr><td>Scottie Sipes</td><td>Scottie.Sipes</td><td>1989-8-21</td><td>North Paigefort</td></tr><tr><td>Dylan Kemmer</td><td>Dylan21</td><td>1963-3-15</td><td>Millsstad</td></tr><tr><td>Thora Johnson</td><td>Thora83</td><td>1992-2-15</td><td>Trompberg</td></tr><tr><td>Ervin Bartoletti</td><td>Ervin.Bartoletti</td><td>1962-3-6</td><td>South Patience</td></tr><tr><td>Morris Ritchie</td><td>Morris.Ritchie</td><td>1981-3-9</td><td>Brielleview</td></tr><tr><td>Sonia Streich</td><td>Sonia_Streich</td><td>1982-9-13</td><td>Tonyview</td></tr><tr><td>Cory Boyle</td><td>Cory98</td><td>1978-7-9</td><td>Kallieton</td></tr><tr><td>Fidel Ratke</td><td>Fidel_Ratke</td><td>1972-7-7</td><td>Deannabury</td></tr><tr><td>Conrad Jast</td><td>Conrad.Jast</td><td>1962-11-26</td><td>East Alanis</td></tr><tr><td>Chloe Daugherty</td><td>Chloe.Daugherty22</td><td>1944-7-17</td><td>Feestfurt</td></tr><tr><td>Leonel O'Keefe</td><td>Leonel.OKeefe97</td><td>1989-6-1</td><td>Satterfieldbury</td></tr><tr><td>Lizzie Dibbert</td><td>Lizzie_Dibbert86</td><td>1948-4-12</td><td>New Pauline</td></tr><tr><td>Juliet Schmitt</td><td>Juliet.Schmitt</td><td>1985-7-23</td><td>Sidneyfurt</td></tr><tr><td>Thalia Jacobs</td><td>Thalia97</td><td>1944-9-16</td><td>Binsville</td></tr><tr><td>Levi McClure</td><td>Levi.McClure80</td><td>1950-7-24</td><td>Calebmouth</td></tr><tr><td>Dayne Howe</td><td>Dayne.Howe89</td><td>1956-4-14</td><td>Athenamouth</td></tr><tr><td>Scotty Flatley</td><td>Scotty_Flatley</td><td>1965-9-18</td><td>Noemibury</td></tr><tr><td>Kaycee Schneider</td><td>Kaycee20</td><td>1950-7-9</td><td>West Matilde</td></tr><tr><td>Ward Corkery</td><td>Ward.Corkery44</td><td>1946-11-29</td><td>West Brigittehaven</td></tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE3 TABLE PORTLET-->
                    <!-- BEGIN EXAMPLE4 TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Columns Reorder
                        </div>
                        <div class="card-body p-t-10">
                            <div class=" m-t-25">
                                <table class="table table-striped table-bordered table-hover " id="sample_6">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th class="hidden-xs">Email</th>
                                        <th class="hidden-xs">Account type</th>
                                        <th class="hidden-xs">Location</th>
                                    </tr>
                                    </thead>
                                    <tbody><tr><td>Annie Friesen</td><td>64</td><td>Annie.Friesen45@yahoo.com</td><td>Auto Loan Account</td><td>Port Ellis</td></tr><tr><td>Talia Nikolaus</td><td>67</td><td>Talia.Nikolaus@hotmail.com</td><td>Auto Loan Account</td><td>New Granvillefurt</td></tr><tr><td>Ignatius Turcotte</td><td>77</td><td>Ignatius.Turcotte@yahoo.com</td><td>Checking Account</td><td>Zechariahtown</td></tr><tr><td>Lora Anderson</td><td>58</td><td>Lora12@hotmail.com</td><td>Savings Account</td><td>Port Lessie</td></tr><tr><td>Easton Parker</td><td>71</td><td>Easton_Parker@gmail.com</td><td>Auto Loan Account</td><td>West Aurelie</td></tr><tr><td>Vincenza Dare</td><td>67</td><td>Vincenza_Dare61@gmail.com</td><td>Savings Account</td><td>East Macieville</td></tr><tr><td>Flavie Gerhold</td><td>42</td><td>Flavie.Gerhold43@gmail.com</td><td>Personal Loan Account</td><td>South Denafort</td></tr><tr><td>Federico Mohr</td><td>41</td><td>Federico.Mohr@hotmail.com</td><td>Credit Card Account</td><td>Kirlinchester</td></tr><tr><td>Rocky McKenzie</td><td>80</td><td>Rocky16@yahoo.com</td><td>Auto Loan Account</td><td>Stoneberg</td></tr><tr><td>Brad Johns</td><td>21</td><td>Brad_Johns84@gmail.com</td><td>Home Loan Account</td><td>South Isacborough</td></tr><tr><td>Chad Paucek</td><td>55</td><td>Chad85@gmail.com</td><td>Savings Account</td><td>East Paul</td></tr><tr><td>Trent Parker</td><td>41</td><td>Trent48@yahoo.com</td><td>Investment Account</td><td>Carrollfort</td></tr><tr><td>Eriberto Collier</td><td>62</td><td>Eriberto_Collier@gmail.com</td><td>Home Loan Account</td><td>Lyrictown</td></tr><tr><td>Terence Streich</td><td>79</td><td>Terence84@yahoo.com</td><td>Savings Account</td><td>Port Ismaelmouth</td></tr><tr><td>Audrey Parker</td><td>23</td><td>Audrey_Parker@hotmail.com</td><td>Home Loan Account</td><td>Wolffchester</td></tr><tr><td>Rose Nader</td><td>26</td><td>Rose.Nader23@hotmail.com</td><td>Savings Account</td><td>Port Anibal</td></tr><tr><td>Otho Ruecker</td><td>30</td><td>Otho43@gmail.com</td><td>Checking Account</td><td>New Marcelle</td></tr><tr><td>Sigurd Tremblay</td><td>28</td><td>Sigurd.Tremblay36@gmail.com</td><td>Money Market Account</td><td>Treutelborough</td></tr><tr><td>Manley Schuppe</td><td>51</td><td>Manley5@gmail.com</td><td>Auto Loan Account</td><td>New Micaelamouth</td></tr><tr><td>Malinda Pollich</td><td>35</td><td>Malinda.Pollich@gmail.com</td><td>Personal Loan Account</td><td>Carrollstad</td></tr><tr><td>Susana Wyman</td><td>50</td><td>Susana64@hotmail.com</td><td>Credit Card Account</td><td>Grimestown</td></tr><tr><td>Andy Kihn</td><td>73</td><td>Andy99@hotmail.com</td><td>Savings Account</td><td>North Solontown</td></tr><tr><td>Rebeka Lubowitz</td><td>58</td><td>Rebeka_Lubowitz35@gmail.com</td><td>Checking Account</td><td>Cadeview</td></tr><tr><td>Clotilde Bogisich</td><td>79</td><td>Clotilde.Bogisich86@gmail.com</td><td>Auto Loan Account</td><td>West Maiya</td></tr><tr><td>Victor Stracke</td><td>22</td><td>Victor_Stracke@hotmail.com</td><td>Investment Account</td><td>New Kole</td></tr><tr><td>Carmela Stoltenberg</td><td>50</td><td>Carmela33@yahoo.com</td><td>Savings Account</td><td>Joliemouth</td></tr><tr><td>Lydia Medhurst</td><td>69</td><td>Lydia.Medhurst@gmail.com</td><td>Credit Card Account</td><td>Rudyberg</td></tr><tr><td>Damion Walsh</td><td>38</td><td>Damion.Walsh77@gmail.com</td><td>Personal Loan Account</td><td>South Olin</td></tr><tr><td>Nestor Sawayn</td><td>26</td><td>Nestor31@yahoo.com</td><td>Home Loan Account</td><td>Janieport</td></tr><tr><td>Alia Klein</td><td>71</td><td>Alia.Klein63@gmail.com</td><td>Auto Loan Account</td><td>New Ethel</td></tr><tr><td>Penelope Brown</td><td>47</td><td>Penelope42@hotmail.com</td><td>Savings Account</td><td>Port Braulio</td></tr><tr><td>Felicia Hayes</td><td>37</td><td>Felicia53@yahoo.com</td><td>Home Loan Account</td><td>Turcotteberg</td></tr><tr><td>Sammie Stoltenberg</td><td>36</td><td>Sammie.Stoltenberg@gmail.com</td><td>Savings Account</td><td>North Walkermouth</td></tr><tr><td>General Quitzon</td><td>42</td><td>General.Quitzon3@hotmail.com</td><td>Personal Loan Account</td><td>Joliestad</td></tr><tr><td>Caterina Leuschke</td><td>75</td><td>Caterina79@yahoo.com</td><td>Credit Card Account</td><td>East Alvis</td></tr><tr><td>Mafalda Romaguera</td><td>80</td><td>Mafalda_Romaguera@hotmail.com</td><td>Money Market Account</td><td>Cloydfurt</td></tr><tr><td>Simeon O'Conner</td><td>66</td><td>Simeon_OConner@gmail.com</td><td>Savings Account</td><td>Jonesbury</td></tr><tr><td>Grayson Douglas</td><td>42</td><td>Grayson.Douglas81@hotmail.com</td><td>Auto Loan Account</td><td>Floridaborough</td></tr><tr><td>Leonardo Hegmann</td><td>68</td><td>Leonardo.Hegmann44@yahoo.com</td><td>Investment Account</td><td>Lake Rosario</td></tr><tr><td>Jane Nitzsche</td><td>29</td><td>Jane_Nitzsche41@yahoo.com</td><td>Personal Loan Account</td><td>Bradtkechester</td></tr><tr><td>Brooks Thompson</td><td>31</td><td>Brooks_Thompson32@hotmail.com</td><td>Checking Account</td><td>East Lisa</td></tr><tr><td>Flavio Shields</td><td>57</td><td>Flavio47@gmail.com</td><td>Personal Loan Account</td><td>North Caylastad</td></tr><tr><td>Gloria Gerlach</td><td>25</td><td>Gloria.Gerlach@hotmail.com</td><td>Personal Loan Account</td><td>Roobport</td></tr><tr><td>Christ Walker</td><td>65</td><td>Christ73@hotmail.com</td><td>Checking Account</td><td>Lavonmouth</td></tr><tr><td>Emmanuel Nienow</td><td>75</td><td>Emmanuel.Nienow@hotmail.com</td><td>Money Market Account</td><td>Kemmerview</td></tr><tr><td>Corine Lemke</td><td>54</td><td>Corine16@gmail.com</td><td>Credit Card Account</td><td>South Nasir</td></tr><tr><td>Jada Satterfield</td><td>34</td><td>Jada.Satterfield@gmail.com</td><td>Savings Account</td><td>New Terencemouth</td></tr><tr><td>Isac Gibson</td><td>64</td><td>Isac.Gibson96@yahoo.com</td><td>Personal Loan Account</td><td>West Matilde</td></tr><tr><td>Cade Crooks</td><td>38</td><td>Cade79@yahoo.com</td><td>Savings Account</td><td>North Dellaview</td></tr><tr><td>Marshall Jacobson</td><td>71</td><td>Marshall16@gmail.com</td><td>Auto Loan Account</td><td>Port Hyman</td></tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE4 TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Server side row details
                        </div>
                        <div class="card-body m-t-35">
                            <table id="row_details" class="display table-bordered responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Sarah Leannon</td>
                                    <td>Sarah22</td>
                                    <td>Sarah@hotmail.com</td>
                                    <td>Toys</td>
                                    <td>269-277-7340</td>
                                </tr>
                                <tr>
                                    <td>Prudence Braun</td>
                                    <td>Prudence.Braun</td>
                                    <td>Prudence@yahoo.com</td>
                                    <td>Home</td>
                                    <td>259-294-8730</td>
                                </tr>
                                <tr>
                                    <td>Frederik Beier</td>
                                    <td>Frederik_Beier71</td>
                                    <td>Frederik@yahoo.com</td>
                                    <td>Health</td>
                                    <td>115-781-3501</td>
                                </tr>
                                <tr>
                                    <td>Devyn Heathcote</td>
                                    <td>Devyn.Heathcote</td>
                                    <td>Devyn@yahoo.com</td>
                                    <td>Garden</td>
                                    <td>030-811-3564</td>
                                </tr>
                                <tr>
                                    <td>Mellie Kuhic</td>
                                    <td>Mellie83</td>
                                    <td>Kuhic73@yahoo.com</td>
                                    <td>Clothing</td>
                                    <td>341-136-6740</td>
                                </tr>
                                <tr>
                                    <td>Nova Sauer</td>
                                    <td>Nova33</td>
                                    <td>Sauer@hotmail.com</td>
                                    <td>Music</td>
                                    <td>243-061-3771</td>
                                </tr>
                                <tr>
                                    <td>Demetrius Mills</td>
                                    <td>Demetrius33</td>
                                    <td>Mills@gmail.com</td>
                                    <td>Kids</td>
                                    <td>254-829-7615</td>
                                </tr>
                                <tr>
                                    <td>Hope Hessel</td>
                                    <td>Hope25</td>
                                    <td>Hope@gmail.com</td>
                                    <td>Books</td>
                                    <td>767-138-4997</td>
                                </tr>
                                <tr>
                                    <td>Jackeline Champlin</td>
                                    <td>Jackeline.Champlin</td>
                                    <td>Jackeline@yahoo.com</td>
                                    <td>Jewelery</td>
                                    <td>059-603-4311</td>
                                </tr>
                                <tr>
                                    <td>Meaghan Renner</td>
                                    <td>Meaghan_Renner</td>
                                    <td>Meaghan20@gmail.com</td>
                                    <td>Automotive</td>
                                    <td>939-379-9525</td>
                                </tr>
                                <tr>
                                    <td>Peggie Kassulke</td>
                                    <td>Peggie_Kassulke</td>
                                    <td>Peggiee@hotmail.com</td>
                                    <td>Clothing</td>
                                    <td>039-431-8024</td>
                                </tr>
                                <tr>
                                    <td>Paige Walsh</td>
                                    <td>Paige_Walsh</td>
                                    <td>Paige@gmail.com</td>
                                    <td>Health</td>
                                    <td>129-485-9542</td>
                                </tr>
                                <tr>
                                    <td>Lamont Hettinger</td>
                                    <td>Lamont.Hettinger77</td>
                                    <td>Lamont@yahoo.com</td>
                                    <td>Automotive</td>
                                    <td>056-955-2547</td>
                                </tr>
                                <tr>
                                    <td>Giovanni Mosciski</td>
                                    <td>Giovanni.Mosciski77</td>
                                    <td>Giovai14@yahoo.com</td>
                                    <td>Music</td>
                                    <td>013-913-2683</td>
                                </tr>
                                <tr>
                                    <td>Gregoria Baumbach</td>
                                    <td>Gregoria21</td>
                                    <td>Gregoria@gmail.com</td>
                                    <td>Shoes</td>
                                    <td>613-910-1426</td>
                                </tr>
                                <tr>
                                    <td>Orval Howe</td>
                                    <td>Orval84</td>
                                    <td>Howe64@hotmail.com</td>
                                    <td>Grocery</td>
                                    <td>679-519-4414</td>
                                </tr>
                                <tr>
                                    <td>Angelica Conroy</td>
                                    <td>Angelica_Conroy</td>
                                    <td>Conroy44@gmail.com</td>
                                    <td>Industrial</td>
                                    <td>360-505-8432</td>
                                </tr>
                                <tr>
                                    <td>Gillian Hickle</td>
                                    <td>Gillian.Hickle30</td>
                                    <td>Gillian57@gmail.com</td>
                                    <td>Home</td>
                                    <td>159-164-6997</td>
                                </tr>
                                <tr>
                                    <td>Willa Feeney</td>
                                    <td>Willa58</td>
                                    <td>Feeney17@hotmail.com</td>
                                    <td>Games</td>
                                    <td>939-683-3718</td>
                                </tr>
                                <tr>
                                    <td>Elyse Cassin</td>
                                    <td>Elyse.Cassin</td>
                                    <td>Cassin72@hotmail.com</td>
                                    <td>Outdoors</td>
                                    <td>584-891-5946</td>
                                </tr>
                                <tr>
                                    <td>Miracle Hessel</td>
                                    <td>Miracle.Hessel</td>
                                    <td>Miracle@gmail.com</td>
                                    <td>Shoes</td>
                                    <td>549-158-1206</td>
                                </tr>
                                <tr>
                                    <td>Ethyl Pfannerstill</td>
                                    <td>Ethyl_Pfannerstill</td>
                                    <td>Ethyl@gmail.com</td>
                                    <td>Shoes</td>
                                    <td>643-622-2951</td>
                                </tr>
                                <tr>
                                    <td>Adah Ortiz</td>
                                    <td>Adah95</td>
                                    <td>Adah48@gmail.com</td>
                                    <td>Tools</td>
                                    <td>270-691-3304</td>
                                </tr>
                                <tr>
                                    <td>Berniece Klein</td>
                                    <td>Berniece_Klein</td>
                                    <td>Berniece3@yahoo.com</td>
                                    <td>Health</td>
                                    <td>211-699-9576</td>
                                </tr>
                                <tr>
                                    <td>Jordi Breitenberg</td>
                                    <td>Jordi59</td>
                                    <td>Jordi@yahoo.com</td>
                                    <td>Sports</td>
                                    <td>694-292-9691</td>
                                </tr>
                                <tr>
                                    <td>Adalberto Satterfield</td>
                                    <td>Adalberto94</td>
                                    <td>Adal@yahoo.com</td>
                                    <td>Books</td>
                                    <td>095-203-5357</td>
                                </tr>
                                <tr>
                                    <td>Reese Turner</td>
                                    <td>Reese21</td>
                                    <td>Reese27@hotmail.com</td>
                                    <td>Tools</td>
                                    <td>225-264-1503</td>
                                </tr>
                                <tr>
                                    <td>Tad Maggio</td>
                                    <td>Tad17</td>
                                    <td>Tad41@hotmail.com</td>
                                    <td>Baby</td>
                                    <td>238-050-3173</td>
                                </tr>
                                <tr>
                                    <td>Arlo Smitham</td>
                                    <td>Arlo_Smitham</td>
                                    <td>Smitham@hotmail.com</td>
                                    <td>Movies</td>
                                    <td>797-948-0375</td>
                                </tr>
                                <tr>
                                    <td>Orlando Pfannerstill</td>
                                    <td>Orlando20</td>
                                    <td>Orlando17@yahoo.com</td>
                                    <td>Sports</td>
                                    <td>683-899-2503</td>
                                </tr>
                                <tr>
                                    <td>Susan Hessel</td>
                                    <td>Susan_Hessel88</td>
                                    <td>Hessel60@gmail.com</td>
                                    <td>Home</td>
                                    <td>004-134-6430</td>
                                </tr>
                                <tr>
                                    <td>Luigi Veum</td>
                                    <td>Luigi_Veum</td>
                                    <td>Luigi75@hotmail.com</td>
                                    <td>Toys</td>
                                    <td>846-211-9311</td>
                                </tr>
                                <tr>
                                    <td>Emmie Rau</td>
                                    <td>Emmie_Rau7</td>
                                    <td>Emmie@hotmail.com</td>
                                    <td>Games</td>
                                    <td>151-075-1800</td>
                                </tr>
                                <tr>
                                    <td>Jessika Johns</td>
                                    <td>Jessika66</td>
                                    <td>Jessika@yahoo.com</td>
                                    <td>Beauty</td>
                                    <td>850-092-7783</td>
                                </tr>
                                <tr>
                                    <td>Elmore Hartmann</td>
                                    <td>Elmore_Hartmann</td>
                                    <td>Elmore@gmail.com</td>
                                    <td>Computers</td>
                                    <td>821-435-4775</td>
                                </tr>
                                <tr>
                                    <td>Liliana Schowalter</td>
                                    <td>Liliana67</td>
                                    <td>Liliana56@gmail.com</td>
                                    <td>Tools</td>
                                    <td>615-363-6678</td>
                                </tr>
                                <tr>
                                    <td>Elmira Zboncak</td>
                                    <td>Elmira_Zboncak</td>
                                    <td>Zboncak45@yahoo.com</td>
                                    <td>Music</td>
                                    <td>313-074-4827</td>
                                </tr>
                                <tr>
                                    <td>Domenic Larkin</td>
                                    <td>Domenic_Larkin32</td>
                                    <td>Larkin@gmail.com</td>
                                    <td>Computers</td>
                                    <td>463-196-1446</td>
                                </tr>
                                <tr>
                                    <td>Josh Wolff</td>
                                    <td>Josh_Wolff</td>
                                    <td>Josh@yahoo.com</td>
                                    <td>Automotive</td>
                                    <td>302-250-6870</td>
                                </tr>
                                <tr>
                                    <td>Cullen Rosenbaum</td>
                                    <td>Cullen_Rosenbaum</td>
                                    <td>Rosenbaum6@yahoo.com</td>
                                    <td>Grocery</td>
                                    <td>928-465-2210</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!-- plugin scripts -->
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.js')}}" ></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.time.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotspline/js/jquery.flot.spline.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <!--plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/flot_charts.js')}}"></script>
    <!-- end of global scripts-->
@stop