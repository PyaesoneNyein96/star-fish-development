import { configureStore } from "@reduxjs/toolkit";
import sidebarReducer from "./Dashboard_Components/Slices/sidebarSlice"

export const store = configureStore({
    reducer: {
        sidebar: sidebarReducer,
    }
});
