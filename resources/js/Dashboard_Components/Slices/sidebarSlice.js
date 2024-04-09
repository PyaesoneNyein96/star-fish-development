import { createSlice } from "@reduxjs/toolkit";

const initialState = {
    sideOpen: true
}

export const sidebarSlice = createSlice({
    name: "sidebar",
    initialState,
    reducers: {
        update: (state) => {
            state.sideOpen = !state.sideOpen;
        },
    }
})

export const { update } = sidebarSlice.actions;

export default sidebarSlice.reducer
