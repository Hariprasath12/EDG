var country_arr = new Array(" Andhra Pradesh"," Arunachal Pradesh"," Assam"," Gujarat"," Bihar"," Chhattisgarh"," Goa"," Haryana"," Himachal Pradesh"," Jammu and Kashmir"," Jharkhand"," Karnataka"," Kerala"," Madhya Pradesh"," Maharashtra"," Manipur"," Meghalaya"," Mizoram"," Nagaland"," Orissa"," Punjab"," Rajasthan"," Sikkim"," Tamil Nadu" ," Telangana"," Tripura"," Uttar Pradesh", "Uttarakhand", "West Bengal", "Andaman and Nicobar Islands", "Chandigarh", "Dadra and Nagar Haveli", "Daman and Diu", "Lakshadweep", "Delhi" , "Puducherry" );

var s_a = new Array();
s_a[0]="";
s_a[1]="Anantapur|Chittoor|East Godavari|Guntur|Kadapa|Krishna|Kurnool|Prakasam|Nellore|Srikakulam|Vishakhapatnam|Vizianagaram|West Godavari";
s_a[2]="Anjaw|Changlang|East Kameng|East Siang|Lohit|Longding|Lower Subansiri|Papum Pare|Tawang|Tirap|Lower Dibang Valley|Upper Siang|Upper Subansiri|West Kameng|West Siang|Upper Dibang Valley|Kurung Kumey";
s_a[3]="Karimganj|Darrang|Dibrugarh|Morigaon|Tinsukia|Bongaigaon|Nalbari|Kokrajhar|Kamrup|Karbi-Anglong|Nagaon|N.C.Hills|Dhemaji|Hailakandi|Lakhimpur|Sonitpur|Dhubri|Goalpara|Barpeta|Golaghat|Jorhat|Sibsagar|Cachar";
s_a[4]="Panchmahals|Vadodara|Amrela|Kheda|Ahmedabad|Valsad|Junagadh|Mehsana|Banaskantha|Gandhinagar|Bharuch|Dangs|Jamnagar|Rajkot|Surat|Sabarkantha|Kutch|Bhavnagar|Surendranagar|Navsari|Anand|Narmada|Patan|Porbander|Dahod";
s_a[5]="Muzaffarpur|Jehanabad|Gaya|Patna|Saran( Chapra )|Darbhanga|Saharsa|Purnea|Bhagalpur|Munger|Aurangabad|Bhojpur(Arah)|Begusarai|East Champaran|Gopalganj|Jamui|Katihar|Khagaria|Madhepura|Madhubani|Nalanda|Nawada|Rohtas(Sasaram)|Samastipur|Sitamarhi|Siwan|Vaishali(Hajipur)|West Champaran|Kishanganj|Araria|Bhabua|Banka|Buxar|Supaul|Sekhpura|Seohar|Lakhisarai";
s_a[6]="Chandigarh";
s_a[7]="North Goa|South Goa";
s_a[8]="Gurgaon|Rohtak|Ambala|Bhiwani|Faridabad|Hissar|Jind|Kaithal|Karnal|Kurukshetra|Mahendragarh|Panchkula|Panipat|Sonipat|Yamunanagar|Sirsa|Rewari|Jhanjhar|Fatehabad";
s_a[9]="Sirmour|Hamirpur|Kullu|Solan|Mandi|Chamba|Bilaspur|Kangra|Kinnaur|Lahaul-Spiti|Shimla|Una";
s_a[10]="Kathua|Badgan|Poonch|Rajauri|Baramula|Doda|Udhampur|Jammu|Kupwara|Pulwama|Anantnag|Srinagar|Leh|Kargil";
s_a[11]="Deoghar|Dhanbad|Giridih|Godda|Gumla|Hazaribagh|Lohardaga|Palamu|Ranchi|Dumka|Chaibasa(West Singhbhum)|Jamshedpur(East Singhbhum)|Bokaro|Chatra|Garhwa|Koderma|Pakur|Sahebganj|Simdega|Latehar|Saraikela|Jamtara";
s_a[12]="Mysore|Gulberga|Chitradurga|Kolar|Bijapur|Dakshina Kannada|Raichur|Bellary|Belgaum|Hassan|Dharwad|Bangalore Rural|Shimoga|Mandya|Chickmagalur|Bangalore Urban|Madikeri|Tumkur|Bidar|Karwar|Udupi|Davanagare|Chamrajnagar|Koppal|Haveri|Gadak|Yadgir";
s_a[13]="Kozhikode|Kasaragod|Idukki|Ernakulam|Cannanore|Mallapuram|Palghat|Pathanamthitta|Quilon|Trichur|Wayanad|Trivandrum|Kottayam|Alapuzzha";
s_a[14]="Sindi|Vidisha|Jabalpur|Bhopal|Hoshangabad|Indore|Rewa|Satna|Shahdol|Chhindwara|Ratlam|Balaghat|Betul|Bhind|Mandla|Chhattarpur|Damoh|Datia|Dewas|Dhar|Guna|Gwalior|Jhabua|Sehore|Mandsaur|Narsinghpur|Panna|Raisen|Rajgarh|Sagar|Seoni|Morena|Shivpuri|Shajapur|Tikamgarh|Ujjain|Khandwa|Khargone|Dindori|Umaria|Badwani|Sheopur|Katni|Neemuch|Harda|Anooppur|Burhanpur|Ashoknagar";
s_a[15]="Aurangabad|Bandra(Mumbai Suburban district)|Nagpur|Pune|Akola|Chandrapur|Jalgaon|Parbhani|Sholapur|Thane|Latur|Mumbai-City|Buldhana|Dhule|Kolhpur|Nanded|Raigad|Amravati|Nashik|Wardha|Ahmednagar|Beed|Bhandara|Gadchiroli|Jalna|Osmanabad|Ratnagiri|Sangli|Satara|Sindudurg|Yavatmal|Nandurbar|Washim|Gondia|Hingoli";
s_a[16]="Imphal East|Imphal West|Thoubal|Bishnupur|Chandel|Churachandpur|Senapati|Ukhrul|Tamenglong";
s_a[17]="Ri-Bhoi District|South Garo Hills|East Khasi Hill|East Garo Hill|West Garo Hill|Jaintia Hill|West Khasi Hill";
s_a[18]="Luglei District|Chimtipui District|Aizawal|Champhai|Mamit|Kolasib|Serchhip|Lawngtlai";
s_a[19]="Wokha|Phek|Tuensang|Mon|Kohima|Zunheboto|Mokokchung|Dimapur";
s_a[20]="Khurda|Navaragpur|Navapada|Gajapati|Boudh|Bhadrak|Ganjam|Dhenkanal|Angul|Puri|Cuttak|Sambalpur|Kalhandi|Koraput|Phulbani|Balangir|Bargah|Deogarh|Jagatsinghpur|Jajpur|Jharsuguda|Kendrapara|Malkangiri|Nayagarh|Rayagada|Sonepur|Balasore|Mayurbhanj|Keonjhar|Sundergarh";
s_a[21]="Sangrur|Jalandhar|Ludhiana|Bhatinda|Kapurthala|Patiala|Amritsar|Ferozepur|Fatehgarh Saheb|Ropar|Gurdaspur|Hosiarpur|Faridkot|Mansa|Moga|Muktsar|Navansahar";
s_a[22]="Jaipur|Barmer|Dungarpur|Jodhpur|Kota|Udaipur|Bikaner|Dausa|Bundi|Sikar|Tonk|Jaisalmer|Nagaur|Rajsamand|Banswara|Bhilwara|Ajmer|Alwar|Bharatpur|Chittorgarh|Churu|Dholpur|Ganganagar|Jalor|Jhalawar|Jhunjhunu|Pali|Sawai Madhopur|Sirohi|Baran|Hanumangarh|Karauli";
s_a[23]="East|South|West|North";
s_a[24]="Chennai|Coimbotore|Cuddalorei|Dharmapuri|Dindigul|Erode|Kancheepuram|Kanniyakumari|Karur|Madurai|Nagapattinam|Namakkal|Nilgiris|Perambalur|Pudukkottai|Ramanathapuram|Salem|Sivaganga|Thanjavur|Theni|Thoothkudi|Tiruchiorappalli|Tirunelveli|Tiruppur|Tiruvallur|Tiruvannamalai|Tiruvarur|Vellore|Villupuram|Virudhunagar";
s_a[25]="Adilabad|Hyderabad|Karimnagar|Khammam|Mahbubnagar|Medak|Nalgonda|Nizamabad|Rangareddy|Warangal";
s_a[26]="North District|South District|West District|Dhalai District";
s_a[27]="Allahabad|Aligarh|Bareilly|Gonda|Hardoi|Kanpur Dehat|Ghaziabad|Unnav|Varanasi|Faizabad|Gorakpur|Jhansi|Lucknow|Agra|Meerut|Moradabad|Barabanki|Mainpuri|Etawah|Gazipur|Etah|Muzaffar Nagar|Saharanpur|Bulandsheha|Mathura|Firozabad|Budaun|Shahjahanpur|Pilibhit|Bijnor|Rampur|Kanpur(Nagar)|Farrukhabad|Fatehpur|Pratapgarh|Jalaun|Hamirpur|Lalitpur|Mirzapur|Basti|Deoria|Raebareili|Sitapur|Banda|Lakhimpur-Khedi|Bahraich|Sultanpur|Mau|Azamgarh|Jaunpur|Balia|Bhadoi|Padrauna|Maharajganj|Siddharth Nagar|Sunbhadra|Mahoba|Ambedkarnagar|Gautam Bodda Nagar|Maha Maya Nagar|jyotiba Phoole Nagar|Kaushambi|Shooji Maharaj|Chandauli|Balrampur|Shravati|Bagpat|Kanooj|Oraiyya|Sant Kabir Nagar";
s_a[28]="Almora|Bageshwar|Chamoli|Champawat|Dehradun|Haridwar|Nainital|Pauri Garhwal|Pithoragarh|Rudraprayag|Tehri Garhwal|Udham Singh Nagar|Uttarkashi";
s_a[29]="Howrah|Darjeeling|Medinipur|Murshidabad|Coochbehar|Malda|Birbhum|North 24 Parganas|South 24 Parganas|Bankura|Bardhaman|Jalpaiguri|Hooghly|Nadia|Dakshin Dinajpur|Purulia|Uttar Dinajpur|Siliguri";
s_a[30]="Andaman|Nicobar";
s_a[31]="Chandigarh";
s_a[32]="Dadra";
s_a[33]="Dama|Diu";
s_a[34]="Lakshdweep";
s_a[35]="New Delhi|Central|North|North West|West|South West|North|North East";
s_a[36]="Karikal|Mahe|Yaman|Pondicherry";




function print_country(country_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(country_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select Country','');
	option_str.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
	}
}

function print_state(state_id, state_index){
	var option_str = document.getElementById(state_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Select State','');
	option_str.selectedIndex = 0;
	var state_arr = s_a[state_index].split("|");
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}



