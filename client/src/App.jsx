import React from "react";
import './App.css';
import Preloader from "./components/common/Preloader/Preloader";

const UnitsContainer = React.lazy(() => import('./components/Units/UnitsContainer'));

class App extends React.Component {
  render() {
    if (!this.props.initialized) {
      return <div className="preloaderArea"><Preloader /></div>
    } else {
      return (
        <div className="app-wrapper"> 
          <UnitsContainer />
        </div>
      );
    }
  }
}

export default App;
