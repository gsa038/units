import { createSelector } from "reselect";

const getUnitsSelector = (state) => {
    return state.unitsPage.units;
}

export const getUnitsState = createSelector(getUnitsSelector, (units) => {
    return units.filter(u => true);
})