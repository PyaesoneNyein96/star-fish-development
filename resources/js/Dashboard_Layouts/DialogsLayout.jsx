import React from 'react'

const DialogsLayout = ({ header, children }) => {
    return (
        <div className=' w-full h-[67vh] rounded-sm drop-shadow'>
            <div className=' grid grid-cols-2 gap-2 h-full'>
                {children}
            </div>
        </div >
    )
}

export default DialogsLayout
