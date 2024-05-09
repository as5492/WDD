    if (name.length < 3) {
      alert('Name must be at least 3 characters long.');
      return;
    }
    if (email === "" || !email.includes('@')) { 
      alert("Please enter a valid e-mail address."); 
      return; }
    if (password === "") { 
      alert("Please enter your password"); 
      return; 
      } 
  });
  
  