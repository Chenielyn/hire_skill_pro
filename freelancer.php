<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hire Skill Pro | The World's Work Marketplace</title>
	<style>
	
	:root {
	  /*color*/
	  --primary: #1f57c3;
	  --primary-dark: #3c8224;
	  --primary-dark-2: #5e6d55;
	  --primary-dark-3: #e4ebe4;
	  --primary-dark-4: #13544e;
	  --primary-light: #e9f7e5;
	  --primary-light-2: #f2f7f2;
	  --black-green: #1f57c3;
	  --red: #bc511b;
	  --grey: #5e6d55;
	  --grey-light: #d5e0d5;
	  --grey-light-2: #9aaa97;
	  --grey-light-3: #e4ebe4;
	  --white: #fff;
	  --blue: #1f57c3;
	  --blue-dark: #254d97;
	  --stone-pink: #a18085;
	  --width: 1140px;
	  --input-height: 40px;
	  --input-radius: 20px;
	  --input-form-width: 300px;

	  --svg-white: invert(98%) sepia(0%) saturate(0%) hue-rotate(9deg)
		brightness(103%) contrast(103%);
	}
	* {
	  margin: 0;
	  padding: 0;
	  list-style-type: none;
	  box-sizing: border-box;
	  font-family: "Arimo", sans-serif;
	}

	html,
	body {
	  font-size: 62.5%;
	}
		.header {
	  font-size: 1.4rem;
	  position: fixed;
	  width: 100%;
	  padding: 0 1rem;
	  background-color: var(--white);

	  z-index: 101;
	}

	.header_wrapper {
	  display: flex;
	  align-items: center;
	  justify-content: space-between;
	  height: 70px;
	  border-bottom: 1px solid var(--grey-light);
	}

	.header_left {
	  display: flex;
	  align-items: center;
	}

	.header_left img {
	  height: 2.5rem;
	}

	.header_left_list {
	  display: flex;
	  align-items: center;
	  margin-left: 2rem;
	  color: var(--grey);
	  font-weight: 500;
	}

	.hitem {
	  display: flex;
	  align-items: center;
	  margin: 0 1.5rem;
	  cursor: pointer;
	}

	.hitem a {
	  text-decoration: none;
	  color: black;
	}


	.hitem img {
	  width: 12px;
	  margin-left: 0.5rem;
	}

	.hr {
	  display: flex;
	  align-items: center;
	}

	.hr_form {
	  position: relative;
	  width: var(--input-form-width);
	}

	.hr_form input {
	  height: var(--input-height);
	  border-radius: var(--input-radius);
	  border: 1px solid var(--grey-light);
	  outline: none;
	  width: 100%;
	  padding-left: 5rem;
	}

	.hr_form input::placeholder {
	  font-weight: 700;
	  padding: 0.8rem;
	}

	.hr_form_input_icons {
	  position: absolute;
	  display: flex;
	  align-items: center;
	  top: 11px;
	  left: 16px;
	}

	.hr_form_input_icons img:nth-child(1) {
	  width: 20px;
	}

	.hr_form_input_icons img:nth-child(2) {
	  width: 12px;
	}

	.hr_btns {
	  margin-left: 1rem;
	}

	.wrapper {
	  width: var(--width);
	  margin: auto;
	}

	.btn_primary {
	  background-color: var(--white);
	  border: none;
	  font-size: 1.4rem;
	  font-weight: 600;
	  color: var(--grey);
	  border-radius: 20px;

	  padding: 1rem 2.5rem;
	  cursor: pointer;
	}

	.btn_secondary {
	  background-color: var(--primary);
	  border: 1px solid var(--primary);
	  font-size: 1.4rem;
	  font-weight: 600;
	  color: var(--white);
	  padding: 1rem 2.5rem;
	  border-radius: 20px;
	  cursor: pointer;
	  transition: background-color 0.3s ease;
	}

	.btn_secondary:hover {
	  background-color: var(--primary-dark);
	}

	.btn_secondary_outline {
	  background-color: var(--white);
	  border: 1px solid var(--primary);
	  /* border: none; */
	  font-size: 1.4rem;
	  font-weight: 600;
	  color: var(--primary);
	  padding: 1rem 2.5rem;
	  border-radius: 20px;
	  cursor: pointer;
	  transition: background-color 0.3s ease;
	}

	.btn_secondary_outline:hover {
	  background-color: var(--primary-light);
	}

	.title-1 {
	  font-size: 80px;
	}

	.title-3 {
	  font-size: 24px;
	}

	.title-4 {
	  font-size: 16px;
	}

	.section_1 {
	  font-size: 1.4rem;
	  position: relative;
	  padding-top: 140px;
	  padding-bottom: 80px;
	}

	.section_1_bottom {
	  /* margin-top: 140px; */
	  position: relative;
	}

	.s1bot h1 {
	  color: var(--primary);
	}

	.s1bot h3 {
	  color: var(--grey);
	  line-height: 32px;
	  font-weight: 500;
	  margin-bottom: 30px;
	}

	.s1bot_btns button {
	  margin-right: 2rem;
	}

	.s1right {
	  position: absolute;
	  top: 120px;
	  right: 0;
	  z-index: 99;
	}

	.s1right img {
	  width: 470px;
	}
	.section_2 {
	  font-size: 1.6rem;
	  display: flex;
	  flex-direction: column;
	}

	.s2h {
	  display: flex;
	  flex-direction: column;
	}

	.s2h h3 {
	  font-size: 42px;
	  margin-bottom: 10px;
	  font-weight: 500;
	}

	.s2h div {
	  display: flex;
	  font-size: 1.6rem;
	  font-weight: 500;
	}

	.s2h div p {
	  color: var(--grey);
	  margin-right: 0.5rem;
	  margin-bottom: 40px;
	}

	.s2h div a {
	  text-decoration: none;
	}

	.s2h div a:hover {
	  text-decoration: underline;
	}

	.section_2_categories {
	  display: flex;
	  flex-wrap: wrap;
	  justify-content: center;
	  align-content: flex-start;
	  grid-column-gap: 30px;
	  column-gap: 30px;
	  grid-row-gap: 15px;
	  row-gap: 15px;
	  margin-top: 30px;
	  margin-bottom: 80px;
	}

	.s2c {
	  width: 261px;
	  height: 134px;
	  background: var(--primary-light-2);
	  border-radius: 8px;
	  padding: 20px;
	  font-size: 23px;
	  font-weight: 500;
	  cursor: pointer;
	}

	.s2c:hover {
	  background: var(--primary-dark-3);
	}

	.s2c h4 {
	  font-size: 23px;
	  margin-bottom: 2rem;
	}

	.s2c div {
	  display: flex;
	  align-items: center;
	  justify-content: space-between;
	  font-size: 1.6rem;
	  color: var(--primary-dark-2);
	}

	.s2c div span:first-of-type {
	  display: flex;
	  align-items: center;
	}

	.s2c div span:last-of-type {
	  margin-right: 40px;
	}

	.s2c div span:first-of-type img {
	  height: 12px;
	}


	.section_left_btn {
	  padding-top: 25px;
	}

	.section_left_btn button {
	  font-size: 15px;
	  line-height: 16px;
	  letter-spacing: 0.6px;
	  padding: 12px 29px;
	  font-weight: 500;
	}

	.section_3_right {
	  width: 48%;
	  height: 100%;
	}

	.section_3_right img {
	  object-fit: cover;
	  margin-bottom: -1px;
	}
	.section_4 {
	  position: relative;
	}

	.s4bg {
	  border-radius: 10px;
	  overflow: hidden;
	  z-index: 9;
	}

	.s4bg img {
	  max-width: 100%;
	  max-height: 100%;
	}

	.s4bod {
	  position: absolute;
	  z-index: 10;
	  top: 0;
	  left: 0;
	  font-size: 1.6rem;
	  color: #ffff;
	  padding: 30px;
	  width: 100%;
	}

	.s4row1 h4 {
	  font-size: 24px;
	  line-height: 32px;

	  font-weight: 500;
	  margin-bottom: 85px;
	}

	.s4row1 h1 {
	  font-size: 72px;
	  line-height: 72px;

	  font-weight: 400;
	  margin-bottom: 30px;
	}

	.s4row h5 {
	  font-size: 18px;
	  font-weight: 500;
	  line-height: 24px;
	  margin-bottom: 20px;
	}

	.s4body {
	  display: flex;
	  flex-wrap: wrap;
	  margin: 0 -15px;
	  /* width: 100%; */
	}

	.s4br {
	  flex: 33.33%;
	  max-width: 33.33%;
	  padding: 0 15px;
	}

	.s4br button {
	  width: 100%;
	  display: flex;
	  flex-direction: column;
	  border-radius: 8px;
	  padding: 15px;
	  text-align: left;
	  cursor: pointer;
	  /* font-size: 15px;
		line-height: 16px; */
	  /* letter-spacing: 0.6px; */
	  color: white;
	  background-color: var(--primary);
	  border-color: transparent;
	  transition: background-color 0.2s, color 0.2s;
	}

	.s4br button:hover {
	  color: var(--primary);
	  background-color: var(--white);
	}

	.s4br button span:first-of-type {
	  margin-bottom: 20px;
	  font-size: 34px;
	  line-height: 34px;
	  text-align: left;
	  font-weight: 500;
	}

	.s4br button span:last-of-type {
	  font-size: 18px;
	  line-height: 22px;
	  text-align: left;
	  font-weight: 500;
	}

	.s4br button span:last-of-type sup {
	  position: relative;
	  font-size: 9px;
	  line-height: 18px;
	  font-weight: 600;
	  vertical-align: top;
	  margin-left: 0.2rem;
	  top: -0.3rem;
	}
	.section_5 {
	  margin-top: 100px;
	  display: flex;
	}

	.s5left {
	  position: relative;
	  width: 65%;
	  margin-right: 30px;
	  border-radius: 8px;
	  padding: 30px;
	  background-color: var(--primary-light-2);
	}

	.s5title {
	  font-size: 72px;
	  line-height: 72px;
	  margin: 30px 0;
	  font-weight: 400;
	}

	.s5info_item {
	  display: flex;
	  padding-right: 200px;
	}

	.s5info_item_left {
	}

	.s5info_item_right {
	  display: flex;
	  flex-direction: column;
	}

	.s5info_item_left img {
	  height: 20px;
	  margin-top: 8px;
	  margin-right: 15px;
	}

	.s5info_item_right h3 {
	  font-size: 36px;
	  font-weight: 500;
	  margin-bottom: 10px;
	}

	.s5info_item_right p {
	  font-size: 1.6rem;
	  margin-bottom: 30px;
	  font-weight: 500;
	  color: var(--primary-dark-2);
	  letter-spacing: -0.05rem;
	}

	.s5left_img {
	  position: absolute;
	  top: 0;
	  right: 0;
	  height: 694px;
	  width: 357px;
	  vertical-align: middle;
	  transform: translate(99px, -55px);
	}

	.s5left_img img {
	  max-width: 100%;
	  max-height: 100%;
	}

	.s5r {
	  width: 35%;
	  border-radius: 8px;
	  background-color: var(--primary);
	}

	.s5r_info {
	  margin-top: 220px;
	  margin-left: 36px;
	}

	.s5r_info h3 {
	  font-size: 36px;
	  margin-bottom: 30px;
	  color: white;
	}

	.s5right {
	  display: flex;
	}

	.s5right img {
	  height: 30px;
	  margin-top: 5px;
	  margin-right: 15px;
	}

	.s5right div {
	  display: flex;
	  flex-direction: column;
	}

	.s5right h3 {
	  margin-bottom: 10px;
	}

	.s5right p {
	  font-size: 16px;
	  font-weight: 500;
	  color: white;
	  margin-bottom: 30px;
	}


	.section_8 {
	  display: flex;
	  justify-content: space-between;
	  margin: 0 auto;
	  max-width: 1200px;
	}

	.s8 {
	  flex: 1;
	  padding: 10px;
	}

	.s8 a {
	  display: block;
	  margin-bottom: 8px;
	  color: #333;
	  text-decoration: none;
	  font-size: 16px;
	}

	.s8 a:hover {
	  text-decoration: underline;
	}



	.footer {
	  padding: 90px 10px;

	  margin-top: 50px;

	  background-color: var(--black-green);
	  display: flex;
	  flex-direction: column;
	}

	.footer_top {
	  display: flex;
	  justify-content: space-between;
	}

	.footer_top_list {
	  flex: 20%;
	}

	.footer_top_list:not(:last-of-type) {
	  margin-right: 20px;
	}

	.footer_top_list h5 {
	  font-size: 1.2rem;
	  font-weight: 500;
	  color: var(--grey-light);
	}

	.footer_top_list ul {
	  margin: 10px 0;
	  display: flex;
	  flex-direction: column;
	}

	.footer_top_list ul li {
	  margin-bottom: 10px;
	}

	.footer_top_list ul li a {
	  font-size: 1.2rem;
	  font-weight: 400;
	  color: var(--white);
	  text-decoration: none;
	  line-height: 20px;
	  transition: text-decoration 0.2s ease;
	}

	.footer_top_list ul li a:hover {
	  text-decoration: underline;
	}

	.fmid {
	  margin-top: 30px;
	  display: flex;
	  align-items: center;
	  justify-content: space-between;
	  color: var(--white);
	  padding: 9px 0;
	  margin-bottom: 20px;
	  border-bottom: 1px solid var(--grey);
	}

	.fmleft,
	.fmid_right {
	  display: flex;
	  align-items: center;
	}

	.fmleft h5,
	.fmid_right h5 {
	  margin-right: 20px;
	  font-size: 1.2rem;
	  font-weight: 500;
	}

	.fmlist,
	.fmid_right_list {
	  display: flex;
	  align-items: center;
	  justify-content: space-between;
	}

	.footer_icons {
	  border-radius: 50%;
	  border: 1px solid var(--grey-light-2);
	  width: 30px;
	  height: 30px;
	  margin-right: 10px;
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  cursor: pointer;
	  transition: background-color 0.2s ease;
	}

	.footer_icons:hover {
	  background-color: var(--grey);
	}

	.footer_icons img {
	  filter: var(--svg-white);

	  height: 14px;
	}

	.fbot {
	  display: flex;
	  align-items: center;
	  color: var(--white);
	  font-size: 1.2rem;
	  font-weight: 400;
	}

	.fbot p {
	  padding-right: 30px;
	  margin-right: 30px;

	  border-right: 1px solid var(--white);
	}

	.flist {
	  display: flex;
	  align-items: center;
	}

	.flist li {
	  margin-right: 20px;
	}
	/* Modal styles */
	 .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    }
    
    .modal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #ccc;
      width: 80%;
      max-width: 600px; /* Maximum width */
      border-radius: 8px; /* Rounded corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
      text-align: left; /* Align text to the left */
      font-size: 16px; /* Base font size */
      line-height: 1.6; /* Increase line height for readability */
    }
    
    .close {
      color: #aaa; /* Light grey color */
      float: right; /* Float to the right */
      font-size: 28px; /* Larger font size */
      font-weight: bold; /* Bold text */
      cursor: pointer; /* Cursor pointer */
    }
    
    .close:hover,
    .close:focus {
      color: #000; /* Black color on hover/focus */
      text-decoration: none; /* Remove underline */
    }

    /* List styles */
    .modal-content ul {
      list-style-type: none; /* Remove default bullets */
      padding: 0;
    }

    .modal-content ul li {
      margin-bottom: 10px;
    }

    .modal-content ul li a {
      text-decoration: none;
      color: black;
    }

    .modal-content p {
      margin-top: 20px;
      color: #666;
    }

    /* Button styles */
    .modal-content button {
      background-color: #007bff;
      color: white; /* White text */
      border: none; /* No border */
      padding: 10px 20px; /* Padding */
      text-align: center; /* Center text */
      text-decoration: none; /* No underline */
      display: inline-block; /* Inline block display */
      font-size: 16px; /* Font size */
      cursor: pointer; /* Cursor pointer */
      border-radius: 5px; /* Rounded corners */
      transition: background-color 0.3s; /* Smooth transition */
      margin-top: 20px;
    }

    .modal-content button:hover {
	background-color: #0056b3; /* Darker blue on hover */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .modal-content {
        width: 90%; /* Adjust width for smaller screens */
        padding: 15px; /* Adjust padding */
      }
    }


	  .cmodal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }
    
    .cmodal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #ccc;
      width: 80%;
      max-width: 800px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: left;
      font-size: 16px;
      line-height: 1.6;
    }
    
    .cmodal-close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
    
    .cmodal-close:hover,
    .cmodal-close:focus {
      color: #000;
      text-decoration: none;
    }
    
    /* List styles */
    .cmlist,
    .cmlist-nested {
      margin-top: 10px;
      margin-bottom: 10px;
      padding-left: 20px;
    }
    
    .cmlist-nested {
      margin-top: 5px;
    }
    
    /* Button styles */
    .cmbutton {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s;
      margin-top: 10px;
    }
    
    .cmbutton:hover {
	background-color: #0056b3; /* Darker blue on hover */
    }

    /* Package layout styles */
    .cmcolumn {
      float: left;
      width: 50%;
      padding: 0 10px;
      box-sizing: border-box;
    }

    .cmcolumn:first-child,
    .cmcolumn:nth-child(2) {
      border-right: 1px solid #ccc; /* Adding border between columns */
    }

    .cmrow:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Package-specific styles */
    .cmpack {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .cmpack h3 {
      margin-top: 0;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .cmodal-content {
        width: 90%;
        padding: 15px;
      }
      .cmcolumn {
        width: 100%;
      }
      .cmcolumn:first-child,
      .cmcolumn:nth-child(2) {
        border-right: none; /* Remove border between columns on small screens */
      }
    }
.rmodal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
}

.rmodal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #ccc;
  width: 80%;
  max-width: 600px; /* Maximum width */
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
  text-align: left; /* Align text to the left */
  font-size: 16px; /* Base font size */
  line-height: 1.6; /* Increase line height for readability */
}

.rclose {
  color: #aaa; /* Light grey color */
  float: right; /* Float to the right */
  font-size: 28px; /* Larger font size */
  font-weight: bold; /* Bold text */
  cursor: pointer; /* Cursor pointer */
}

.rclose:hover,
.rclose:focus {
  color: #000; /* Black color on hover/focus */
  text-decoration: none; /* Remove underline */
}

.rmodal-content form {
  margin-top: 20px;
}

.rmodal-content label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

.rmodal-content input[type="file"],
.rmodal-content textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
}

.rfile-info {
  color: #666;
  font-size: 14px;
  margin-bottom: 12px;
}

.rmodal-actions {
  margin-top: 20px;
}

.rmodal-button {
background-color: #007bff;
  color: white; /* White text */
  border: none; /* No border */
  padding: 10px 20px; /* Padding */
  text-align: center; /* Center text */
  text-decoration: none; /* No underline */
  display: inline-block; /* Inline block display */
  font-size: 16px; /* Font size */
  cursor: pointer; /* Cursor pointer */
  border-radius: 5px; /* Rounded corners */
  transition: background-color 0.3s; /* Smooth transition */
  margin-right: 10px;
}


.rcancel {
  background-color: #bbb; /* Light grey background */
}

.rmodal-button:hover {
	background-color: #0056b3; /* Darker blue on hover */
}

@media (max-width: 768px) {
  .rmodal-content {
    width: 90%; /* Adjust width for smaller screens */
    padding: 15px; /* Adjust padding */
  }
}
/* Modal Styles */
.mcon {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
}

.modal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #ccc;
  width: 80%;
  max-width: 600px; /* Maximum width */
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
  text-align: left; /* Align text to the left */
  font-size: 16px; /* Base font size */
  line-height: 1.6; /* Increase line height for readability */
}

.mclose {
  color: #aaa; /* Light grey color */
  float: right; /* Float to the right */
  font-size: 28px; /* Larger font size */
  font-weight: bold; /* Bold text */
  cursor: pointer; /* Cursor pointer */
}

.mclose:hover,
.mclose:focus {
  color: #333; /* Darker grey color on hover/focus */
}

.modal-content h2 {
  margin-top: 0; /* Remove default margin */
}

.modal-content p {
  margin-top: 10px;
  color: #666; /* Dark grey color for paragraphs */
}

.modal-content form {
  margin-top: 20px;
}

.modal-content label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
  color: #555; /* Dark grey color for labels */
}

.modal-content input[type="email"],
.modal-content input[type="text"] {
  width: calc(100% - 20px); /* Adjust width to accommodate padding */
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
}

/* Modal Container */
.umodal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
}

/* Modal Container */
.umodal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
}

/* Modal Content */
.umodal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #ccc;
  width: 80%;
  max-width: 600px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: left;
  font-size: 16px;
  line-height: 1.6;
}

/* Close Button */
.uclose {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.uclose:hover,
.uclose:focus {
  color: #333;
}

/* Headings and Paragraphs */
.umodal-content h2 {
  margin-top: 0;
}

.umodal-content p {
  margin-top: 10px;
  color: #666;
}

/* Form Elements */
.umodal-content form {
  margin-top: 20px;
}

.umodal-content label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
  color: #555;
}

.umodal-content input[type="text"],
.umodal-content input[type="email"],
.umodal-content textarea {
  width: calc(100% - 24px);
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
}

.umodal-content textarea {
  height: 100px;
}

.umodal-content input[type="text"]:focus,
.umodal-content input[type="email"]:focus,
.umodal-content textarea:focus {
  border-color: #4CAF50;
}

/* Action Buttons */
.umodal-actions {
  text-align: right;
  margin-top: 20px;
}

.usave-button,
.ucancel {
  background-color: #007bff; /* Blue background for Save button */
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s;
  margin-right: 10px;
}

.ucancel {
  background-color: #ccc; /* Gray background for Cancel button */
  color: #333; /* Dark grey text */
}

.usave-button:hover {
  background-color: #0056b3; /* Darker blue on hover for Save button */
}

@media (max-width: 768px) {
  .umodal-content {
    width: 90%;
    padding: 15px;
  }
}




	</style>
</head>
  
  <body>
    <header class="header">
      <div class="header_wrapper wrapper">
        <div class="header_left">
		  <img src="./img/fvlogo.png" alt="" />
		  <ul class="header_left_list">
			<li class="hitem">
			  <a href="client.php" class="button_link">Find Talent</a>
			</li>
			<li class="hitem">
			  <a href="freelancer.php" class="button_link">Find Work</a>
			</li>
			<li class="hitem"> Why Hire Skill Pro</li>
		  </ul>
		</div>
		
        <div class="hr">
		  <div class="hr_form">
			<form action="/search" method="get">
			  <input type="search" placeholder="Search" name="search" id="search_input" />
			</form>
		  </div>
		  <div class="hr_btns">
			<button class="btn_primary">Log In</button>
			<button class="btn_secondary">Sign Up</button>
		  </div>
		</div>
      </div>
    </header>
	
    <section class="section_1 wrapper">
      <div class="s1">
        <div class="s1bot">
          <h1 class="title-1"> Welcome to <br>HireSkillPro!</h1>
          <h3 class="title-3">
			At HireSkillPro, we connect talented freelancers with <br>
			businesses that need their skills. Whether you're looking<br>
			for work or hiring, HireSkillPro makes it easy.
          </h3>
          <div class="s1bot_btns">
            <button class="btn_secondary">Join US</button>
          </div>
        </div>
        <div class="s1right">
          <img src="./img/fvlogo.png" alt="" />
        </div>
      </div>
    </section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

		<section class="section_4 wrapper">
		  <div class="s4bg">
			<img src="./img/freelance.webp" alt="find_talent" />
		  </div>
		  <div class="s4bod">
			<div class="s4row1">
			  <h4>For Freelancer</h4>
			  <h1>
				Find Work <br/>
				your way
			  </h1>
			</div>

			<div class="s4row">
			  <h5><br> Meet clients you’re excited to work with and take <br/>your career
				or business to new heights.<br><br>
			  </h5>
			</div>
			<div class="s4body">
			  <div class="s4br">
				<button onclick="openModal('profile-modal')">Edit Profile</button>
			  </div>
			  <div class="s4br">
				<button onclick="openModal('control-modal')">Control Your Work</button>
			  </div>
			  <div class="s4br">
				<button onclick="openModal('pro-modal')">Be a Pro</button>
			  </div>
			</div>
		  </div>
		</section>

 <div id="profile-modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('profile-modal')">&times;</span>
      <h2>Edit Profile</h2>
    <ul>
	  <li style="cursor: pointer; margin: 20px; border: 1px solid #ccc; padding: 10px; border-radius: 5px;">
		<a href="exam.php">Take Test</a>
	  </li>
	  <li style="cursor: pointer; margin: 20px; border: 1px solid #ccc; padding: 10px; border-radius: 5px;" onclick="openModal('update-profile-modal')">Update Profile</li>
	  <li style="cursor: pointer; margin: 20px; border: 1px solid #ccc; padding: 10px; border-radius: 5px;" onclick="openModal('add-resume-modal')">Add Resume</li>
	  <li style="cursor: pointer; margin: 20px; border: 1px solid #ccc; padding: 10px; border-radius: 5px;" onclick="openModal('edit-payment-modal')">Edit Payment Method</li>
	</ul>
      <p>Make changes to your profile using the links above.</p>
      <button onclick="closeModal('profile-modal')">Close</button>
    </div>
  </div>
  
	<!-- Update Profile Modal -->
	<div id="update-profile-modal" class="umodal">
	  <div class="umodal-content">
		<span class="uclose" onclick="closeModal('update-profile-modal')">&times;</span>
		<h2>Update Profile</h2>
		<p>Make changes to your profile using the form below:</p>
		<form id="profile-update-form">
		  <label for="full-name">Full Name:</label>
		  <input type="text" id="full-name" name="full-name" required><br><br>
		  
		  <label for="email">Email:</label>
		  <input type="email" id="email" name="email" required><br><br>
		  
		  <label for="bio">Bio:</label><br>
		  <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>
		  
		  <label for="skills">Skills (comma-separated):</label>
		  <input type="text" id="skills" name="skills"><br><br>
		  
		  <div class="umodal-actions">
			<button type="submit" class="usave-button">Save Changes</button>
			<button type="button" class="ucancel" onclick="closeModal('update-profile-modal')">Cancel</button>
		  </div>
		</form>
	  </div>
	</div>



	<!-- Add Resume Modal -->
<div id="add-resume-modal" class="rmodal">
  <div class="rmodal-content">
    <span class="rclose" onclick="closeModal('add-resume-modal')">&times;</span>
    <h2>Add Resume</h2>
    <form>
      <label for="resume-file">Upload Resume:</label>
      <input type="file" id="resume-file" name="resume" accept=".pdf,.doc,.docx">
      <p class="rfile-info">Supported file formats: PDF, DOC, DOCX</p>
      <label for="resume-description">Resume Description:</label>
      <textarea id="resume-description" name="resume-description" rows="4"></textarea>
      <div class="rmodal-actions">
        <button type="submit" class="rmodal-button">Save</button>
        <button type="button" class="rmodal-button rcancel" onclick="closeModal('add-resume-modal')">Cancel</button>
      </div>
    </form>
  </div>
</div>

	
<!-- Edit Payment Method Modal -->
<div id="edit-payment-modal" class="mcon">
  <div class="modal-content">
    <span class="mclose" onclick="closeModal('edit-payment-modal')">&times;</span>
    <h2>Edit Payment Method</h2>
    <p>Select or enter your preferred payment method:</p>
    <form>
      <label for="paypal-email">PayPal Email:</label>
      <input type="email" id="paypal-email" name="paypal-email" placeholder="Enter your PayPal email" required>
      
      <label for="credit-card">Credit Card:</label>
      <input type="text" id="credit-card" name="credit-card" placeholder="Enter your credit card number">
      
      <label for="bank-transfer">Bank Transfer:</label>
      <input type="text" id="bank-transfer" name="bank-transfer" placeholder="Enter your bank account details">
      
      <div class="modal-actions">
        <button type="submit" class="rmodal-button">Save</button>
        <button type="button" class="rmodal-button rcancel" onclick="closeModal('edit-payment-modal')">Cancel</button>
      </div>
    </form>
  </div>
</div>








		<div id="control-modal" class="modal">
		  <div class="modal-content">
			<span class="close" onclick="closeModal('control-modal')">&times;</span>
			<h2>Control Your Work</h2>
			<p>As a freelancer, having control over your work allows you to optimize your productivity and satisfaction. Here are some tips:</p>
			<ul>
			  <li><strong>Set Clear Goals:</strong> Define your short-term and long-term career goals to align your work accordingly.</li>
			  <li><strong>Manage Your Schedule:</strong> Use tools like calendars and time-tracking apps to organize and prioritize tasks.</li>
			  <li><strong>Communicate Effectively:</strong> Clearly communicate expectations and deadlines with clients to avoid misunderstandings.</li>
			  <li><strong>Seek Feedback:</strong> Regularly ask for feedback from clients to improve your skills and services.</li>
			  <li><strong>Embrace Flexibility:</strong> Adapt to changes in projects and client needs while maintaining professionalism.</li>
			</ul>
			<p>By implementing these strategies, you can effectively control your work and seize opportunities that align with your career aspirations.</p>
			<p>Remember, freelancing offers flexibility and autonomy, allowing you to pursue diverse job opportunities and enhance your professional growth.</p>
		  </div>
		</div>



		  <!-- Modal -->
		   <div id="pro-modal" class="cmodal">
    <div class="cmodal-content">
      <span class="cmodal-close" onclick="closeModal('pro-modal')">&times;</span>
      <h2>Unlock Your Potential</h2>
      <p>Choose the right package to unlock your freelance potential:</p>

      <!-- Package tiles -->
      <div class="cmrow">
        <div class="cmcolumn">
          <div class="cmpack">
            <h3>Basic Package</h3>
            <ul class="cmlist">
              <li><strong>Start your journey for free:</strong>
                <ul class="cmlist-nested">
                  <li>Access to limited job listings.</li>
                  <li>Standard support for your queries.</li>
                </ul>
              </li>
            </ul>
            <button class="cmbutton" onclick="openModal('price-package-modal')">Choose Package</button>
          </div>
        </div>

        <div class="cmcolumn">
          <div class="cmpack">
            <h3>Premium Package</h3>
            <ul class="cmlist">
              <li><strong>Enhance your career for 100 pesos:</strong>
                <ul class="cmlist-nested">
                  <li>Access to exclusive job listings.</li>
                  <li>Priority support for your queries.</li>
                </ul>
              </li>
            </ul>
            <button class="cmbutton" onclick="openModal('price-package-modal')">Choose Package</button>
          </div>
        </div>

        <div class="cmcolumn">
          <div class="cmpack">
            <h3>Professional Package</h3>
            <ul class="cmlist">
              <li><strong>Elevate your freelance game for 1000 pesos:</strong>
                <ul class="cmlist-nested">
                  <li>All benefits of Premium.</li>
                  <li>Career coaching sessions.</li>
                </ul>
              </li>
            </ul>
            <button class="cmbutton" onclick="openModal('price-package-modal')">Choose Package</button>
          </div>
        </div>

        <div class="cmcolumn">
          <div class="cmpack">
            <h3>Enterprise Package</h3>
            <ul class="cmlist">
              <li><strong>Scale your freelance business for 5000 pesos:</strong>
                <ul class="cmlist-nested">
                  <li>All benefits of Professional.</li>
                  <li>Customized job matching service.</li>
                </ul>
              </li>
            </ul>
            <button class="cmbutton" onclick="openModal('price-package-modal')">Choose Package</button>
          </div>
        </div>
      </div>

      <p>Understanding job rates as a freelancer is crucial. Rates vary widely based on factors like:</p>
      <ul class="cmlist">
        <li>Industry demand and competition.</li>
        <li>Specialized skills and experience level.</li>
        <li>Geographical location and cost of living.</li>
        <li>Project complexity and scope.</li>
      </ul>
      <p>Ready to invest in your freelance career? Choose your package and unlock new opportunities today!</p>
    </div>
  </div>

  <!-- Modal for Price Packages -->
   <div id="price-package-modal" class="cmodal">
    <div class="cmodal-content">
      <span class="cmodal-close" onclick="closeModal('price-package-modal')">&times;</span>
      <h2>Choose Your Price Package</h2>

      <!-- Package tiles in a side-by-side layout -->
      <div class="cmrow">
        <div class="cmcolumn">
          <div class="cmpack">
            <h3>Basic Package</h3>
            <ul class="cmlist">
              <li><strong>Free:</strong>
                <ul class="cmlist-nested">
                  <li>Access to limited job listings.</li>
                  <li>Standard support for your queries.</li>
                </ul>
              </li>
            </ul>
            <button class="cmbutton" onclick="choosePackage('Basic Package')">Choose Package</button>
          </div>
        </div>

        <div class="cmcolumn">
          <div class="cmpack">
            <h3>Premium Package</h3>
            <ul class="cmlist">
              <li><strong>100 pesos:</strong>
                <ul class="cmlist-nested">
                  <li>Access to exclusive job listings.</li>
                  <li>Priority support for your queries.</li>
                </ul>
              </li>
            </ul>
            <button class="cmbutton" onclick="choosePackage('Premium Package')">Choose Package</button>
          </div>
        </div>

        <div class="cmcolumn">
          <div class="cmpack">
            <h3>Professional Package</h3>
            <ul class="cmlist">
              <li><strong>1000 pesos:</strong>
                <ul class="cmlist-nested">
                  <li>All benefits of Premium.</li>
                  <li>Career coaching sessions.</li>
                </ul>
              </li>
            </ul>
            <button class="cmbutton" onclick="choosePackage('Professional Package')">Choose Package</button>
          </div>
        </div>

        <div class="cmcolumn">
          <div class="cmpack">
            <h3>Enterprise Package</h3>
            <ul class="cmlist">
              <li><strong>5000 pesos:</strong>
                <ul class="cmlist-nested">
                  <li>All benefits of Professional.</li>
                  <li>Customized job matching service.</li>
                </ul>
              </li>
            </ul>
            <button class="cmbutton" onclick="choosePackage('Enterprise Package')">Choose Package</button>
          </div>
        </div>
      </div>

      <p>Invest in your freelance career today and unlock new opportunities!</p>
      <button class="cmbutton" onclick="closeModal('price-package-modal')">Close</button>
    </div>
  </div>




		<script>
		function openModal(modalId) {
		  var modal = document.getElementById(modalId);
		  modal.style.display = "block";
		}

		function closeModal(modalId) {
		  var modal = document.getElementById(modalId);
		  modal.style.display = "none";
		}
		</script>




    <section class="section_5 wrapper">
      <div class="s5left">
        <div class="s5info">
          <h1 class="s5title">
            Why Hire Skill Pro
          </h1>

          <div class="s5info_item">
            <div class="s5info_item_left">
              <img src="./img/star-circle.svg" alt="" />
            </div>
            <div class="s5info_item_right">
              <h3>Proof of quality</h3>
              <p>
                Check any pro’s work samples, client reviews, and <br />identity
                verification.
              </p>
            </div>
          </div>
          <div class="s5info_item">
            <div class="s5info_item_left">
              <img src="./img/doller-circle.svg" alt="" />
            </div>
            <div class="s5info_item_right">
              <h3>No cost until you hire</h3>
              <p>
                Interview potential fits for your job, negotiate rates, and<br />
                only pay for work you approve.
              </p>
            </div>
          </div>
          <div class="s5info_item">
            <div class="s5info_item_left">
              <img src="./img/check-circle.svg" alt="" />
            </div>
            <div class="s5info_item_right">
              <h3>Safe and secure</h3>
              <p>
                Focus on your work knowing we help protect your data<br />
                and privacy. We’re here with 24/7 support if you need it.
              </p>
            </div>
          </div>
        </div>
        <div class="s5left_img">
          <img src="./imgreading.png" alt="" />
        </div>
      </div>
      <div class="s5r">
        <div class="s5r_info">
         <h3>
            ABOUT HIRE  SKILL  PRO
		</h3>
	  </div>
      </div>
    </section>

   

    



    <footer class="footer">
      <div class="wrapper">
        <div class="footer_top">
          <div class="footer_top_list">
            <h5>For Clients</h5>
            <ul>
              <li>
                <a href="#">How to Hire</a>
              </li>

              <li><a href="#">Talent Marketplace</a></li>

              <li>
                <a href="#">Direct Contracts</a>
              </li>
              <li>
                <a href="#">Hire Worldwide</a>
              </li>
            
            </ul>
          </div>
          <div class="footer_top_list">
            <h5>For Talent</h5>
            <ul>
              <li>
                <a href="#">How to Find Work</a>
              </li>

              <li><a href="#">Direct Contracts</a></li>

              <li>
                <a href="#">Find Freelance Jobs Worldwide</a>
              </li>
              
            </ul>
          </div>

          <div class="footer_top_list">
            <h5>Resources</h5>
            <ul>
              <li>
                <a href="#">Help & Support</a>
              </li>

              <li>
                <a href="#">Hire Skill Pro Reviews</a>
              </li>
              
              <li>
                <a href="#">Community</a>
              </li>
              <li>
                <a href="#">Free Business tools</a>
              </li>
            </ul>
          </div>
          <div class="footer_top_list">
            <h5>Company</h5>
            <ul>
              <li>
                <a href="#">About Us </a>

              <li>
              
                <a href="#">Careers</a>
              </li>
              
              <li>
                <a href="#">Contact Us</a>
              </li>
              <li>
                <a href="#">Trust, Safety & Security</a>
              </li>
             
            </ul>
          </div>
        </div>
        <div class="fmid">
          <div class="fmleft">
            <h5>Follow Us</h5>
            <div class="fmlist">
              <div class="footer_icons">
                <img src="./img/facebook.svg" alt="facebook" />
              </div>
              <div class="footer_icons">
                <img src="./img/linkedIn.svg" alt="linkedIn" />
              </div>
              <div class="footer_icons">
                <img src="./img/twitter.svg" alt="twitter" />
              </div>
              <div class="footer_icons">
                <img src="./img/youtube.svg" alt="youtube" />
              </div>
              <div class="footer_icons">
                <img src="./img/instagram.svg" alt="instagram" />
              </div>
            </div>
          </div>
          
        </div>
        <div class="fbot">
          <p>2024 Hire Skill Pro Inc.</p>
          <ul class="flist">
            <li>Terms of Service</li>
            <li>Privacy Policy</li>
            <li>Cookie Settings</li>
            <li>Accessibility</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
