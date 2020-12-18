import { createStore, combineReducers, applyMiddleware, compose } from "redux";
import thunkMiddlware from 'redux-thunk';
import appReducer from "./app-reducer";


let rootReducer = combineReducers({
    unitsPage: unitsReducer,
    app: appReducer,
});

const composeEnhancers = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose
const store = createStore(rootReducer, composeEnhancers(applyMiddleware(thunkMiddlware)))

window.__store__ = store


export default store