import { configureStore } from "@reduxjs/toolkit";
import sidebarReducer from "./Dashboard_Components/Slices/sidebarSlice"
import componentSlice from "./Dashboard_Components/Slices/componentSlice";

export const store = configureStore({
    reducer: {
        sidebar: sidebarReducer,
        componentSlice: componentSlice
    }
});
