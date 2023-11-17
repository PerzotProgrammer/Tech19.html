import './App.css';

function App() {
    return (
        <div>
            <MyHelloWorld/>
            <TextBlocks/>
        </div>
    );
}

function MyHelloWorld() {
    return (
        <div className="textCenter textBigger">
            <p className="bgAqua">Witaj świecie w Reactowej aplikacji!</p>
        </div>
    );
}

function TextBlocks() {
    return (
        <div className="textCenter textBig">
            <p>
                Jest to moja pierwsza aplikacja w React.js! <br/>
                Mam nadzieję, że moja programistyczna przyszłość jest jasna!
            </p>
        </div>
    );
}

export default App;
