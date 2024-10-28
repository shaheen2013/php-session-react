import { useState } from "react";
import reactLogo from "./assets/react.svg";
import viteLogo from "/vite.svg";
import "./App.css";

function App() {
  const [count, setCount] = useState(0);

  const handleSubmit = async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);

    const data = await fetch("http://localhost:8000/login.php", {
      method: "POST",
      body: formData,
      credentials: "include",
    });

    const response = await data.json();

    console.log("response => ", response);
  };

  const handleGetProtectedData = async () => {
    const data = await fetch("http://localhost:8000/protected.php", {
      credentials: "include",
    });

    const response = await data.json();
    console.log("response => ", response);
  };

  const handleLogout = async () => {
    const data = await fetch("http://localhost:8000/logout.php", {
      credentials: "include",
    });

    const response = await data.json();
    console.log("response => ", response);
  };

  return (
    <>
      <h2>Login</h2>

      <form onSubmit={handleSubmit}>
        <input type="text" name="username" value="user" onChange={() => {}} />
        <input
          type="password"
          name="password"
          value="pass"
          onChange={() => {}}
        />

        <input type="submit" value="Login" />
      </form>

      <br />

      <button onClick={handleGetProtectedData}>get protected data</button>
      <button onClick={handleLogout}>Logout</button>
    </>
  );
}

export default App;
