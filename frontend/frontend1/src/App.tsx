import React, { useState } from "react";
import "./App.css";

const App: React.FC = () => {
  // State điều khiển panel
  const [isRightPanelActive, setIsRightPanelActive] = useState(false);

  return (
  
    <div
      className={`container ${isRightPanelActive ? "right-panel-active" : ""}`}
      id="container"
    >
      {/* Register Form */}
      <div className="form-container register-container">
        <form action="#">
          <h1>Register here.</h1>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button type="submit">Register</button>
          <span>or use your account</span>
          <div className="social-container">
            <a href="#" className="social">
              <i className="lni lni-facebook-fill"></i>
            </a>
            <a href="#" className="social">
              <i className="lni lni-google"></i>
            </a>
            <a href="#" className="social">
              <i className="lni lni-linkedin-original"></i>
            </a>
          </div>
        </form>
      </div>

      {/* Login Form */}
      <div className="form-container login-container">
        <form action="#">
          <h1>Login here.</h1>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <div className="content">
            <div className="checkbox">
              <input type="checkbox" name="remember" id="remember" />
              <label htmlFor="remember">Remember me</label>
            </div>
            <div className="pass-link">
              <a href="#">Forgot password?</a>
            </div>
          </div>
          <button type="submit">Login</button>
          <span>or use your account</span>
          <div className="social-container">
            <a href="#" className="social">
              <i className="lni lni-facebook-fill"></i>
            </a>
            <a href="#" className="social">
              <i className="lni lni-google"></i>
            </a>
            <a href="#" className="social">
              <i className="lni lni-linkedin-original"></i>
            </a>
          </div>
        </form>
      </div>

      {/* Overlay */}
      <div className="overlay-container">
        <div className="overlay">
          <div className="overlay-panel overlay-left">
            <h1 className="title">
              Hello <br /> friends
            </h1>
            <p>If you have an account, login here and have fun</p>
            <button
              className="ghost"
              id="login"
              onClick={() => setIsRightPanelActive(false)}
            >
              Login <i className="lni lni-arrow-left login"></i>
            </button>
          </div>
          <div className="overlay-panel overlay-right">
            <h1 className="title">
              Start your <br /> journey now
            </h1>
            <p>
              If you don't have an account yet, join us and start your journey.
            </p>
            <button
              className="ghost"
              id="register"
              onClick={() => setIsRightPanelActive(true)}
            >
              Register <i className="lni lni-arrow-right register"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  
  );
};

export default App;
