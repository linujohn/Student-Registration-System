function validate()
      {
        

        if(document.reg.fname.value=='')
          {
            window.alert("Please Enter First Name!");
            document.reg.fname.focus();
            return false;

         }

        if(document.reg.lname.value=='')
        {
          window.alert("Please Enter Last Name!");
          document.reg.lname.focus();
          return false;

        }
        if(document.reg.admn.value=='')
        {
          window.alert("Please Enter Admission No.!");
          document.reg.admn.focus();
          return false;

        }
        if(document.reg.ktu.value=='')
        {
          window.alert("Enter KTU Register No.!");
          document.reg.ktu.focus();
          return false;

        }
        if(document.reg.bday.value=='')
        {
          window.alert("Please Select DOB!");
          document.reg.bday.focus();
          return false;

        }
        if(document.reg.branch.value=='')
        {
          window.alert("Please Select Branch!");
          document.reg.branch.focus();
          return false;

        }
        

      
        if(document.reg.semester.value=='')
        {
          window.alert("Please Select Semester!");
          document.reg.semester.focus();
          return false;

        }
        if(document.reg.batch.value=='')
        {
          window.alert("Please Select Batch!");
          document.reg.batch.focus();
          return false;

        }
        if(document.reg.roll.value=='')
        {
          window.alert("Please Enter Roll No.!");
          document.reg.roll.focus();
          return false;

        }


      }